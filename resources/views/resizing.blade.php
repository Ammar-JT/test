<input name="file" type="file" id="select">
<button onclick="uploadFile()">submit</button>
<input type="hidden" id="token" value="{{ csrf_token() }}" name="token">


<!-- resized image -->
<h1>Resized Image:</h1>
<img id="preview">



<script>
var globalBlob = new Blob();

//1- resize the image using the gist:
document.getElementById('select').onchange = function(evt) {
    ///// you can control the size by changing width, you can add heghit as well:
    ImageTools.resize(this.files[0], {
        width: 1200
    }, function(blob, didItResize) {
        // didItResize will be true if it managed to resize it, otherwise false (and will return the original file as 'blob')
        document.getElementById('preview').src = window.URL.createObjectURL(blob);

        //after resizing the image, append it to the form:
        globalBlob = blob;

        // you can also now upload this blob using an XHR.
    });

    /*
        // Get a file from an input field
        const file = this.files[0]

        // Get the data URL of the image as a string
        const fileAsDataURL = window.URL.createObjectURL(file)

        // Get the dimensions
        getHeightAndWidthFromDataUrl(fileAsDataURL).then(dimensions => {
            console.log(dimensions)
        })
        if(this.file[0].width > 1200){
            ImageTools.resize(this.files[0], {
                width: 1200
            }, function(blob, didItResize) {
                // didItResize will be true if it managed to resize it, otherwise false (and will return the original file as 'blob')
                document.getElementById('preview').src = window.URL.createObjectURL(blob);

                //after resizing the image, append it to the form:

                // you can also now upload this blob using an XHR.
            });
        }else{
            document.getElementById('preview').src = window.URL.createObjectURL(this.file[0].blob);
        }
    */
};
</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
//2- upload the image after resizing it, using xmlHttpRequest passing the blob:
    function uploadFile() {
        //define data and connections
        //var blob = new Blob([JSON.stringify(data)]);

        var url = URL.createObjectURL(globalBlob);
        var xhr = new XMLHttpRequest();
        var token = $("#token").val();
        xhr.open('POST', "{{route('resize.store')}}?_token="+token, true);

        // define new form
        var formData = new FormData();
        formData.append('blob', globalBlob);


        formData.append('csrf', $('meta[name="csrf-token"]').attr('content'));


        // action after uploading happens
        xhr.onload = function(e) {
            console.log("File uploading completed!");
        };

        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                alert(xhr.responseText);
            }
        }

        // do the uploading
        console.log("File uploading started!");
        xhr.send(formData);
    }
</script>


<script>
    //a gist script which can resize the image
    'use strict';

    if (typeof exports === "undefined") {
        var exports = {};
    }

    if (typeof module === "undefined") {
    var module = {};
    }

    Object.defineProperty(exports, '__esModule', {
        value: true
    });

    var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

    function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

    var hasBlobConstructor = typeof Blob !== 'undefined' && (function () {
        try {
            return Boolean(new Blob());
        } catch (e) {
            return false;
        }
    })();

    var hasArrayBufferViewSupport = hasBlobConstructor && typeof Uint8Array !== 'undefined' && (function () {
        try {
            return new Blob([new Uint8Array(100)]).size === 100;
        } catch (e) {
            return false;
        }
    })();

    var hasToBlobSupport = typeof HTMLCanvasElement !== "undefined" ? HTMLCanvasElement.prototype.toBlob : false;

    var hasBlobSupport = hasToBlobSupport || typeof Uint8Array !== 'undefined' && typeof ArrayBuffer !== 'undefined' && typeof atob !== 'undefined';

    var hasReaderSupport = typeof FileReader !== 'undefined' || typeof URL !== 'undefined';

    var ImageTools = (function () {
        function ImageTools() {
            _classCallCheck(this, ImageTools);
        }

        _createClass(ImageTools, null, [{
            key: 'resize',
            value: function resize(file, maxDimensions, callback) {
                if (typeof maxDimensions === 'function') {
                    callback = maxDimensions;
                    maxDimensions = {
                        width: 640,
                        height: 480
                    };
                }

                var maxWidth = maxDimensions.width;
                var maxHeight = maxDimensions.height;

                if (!ImageTools.isSupported() || !file.type.match(/image.*/)) {
                    callback(file, false);
                    return false;
                }

                if (file.type.match(/image\/gif/)) {
                    // Not attempting, could be an animated gif
                    callback(file, false);
                    // TODO: use https://github.com/antimatter15/whammy to convert gif to webm
                    return false;
                }

                var image = document.createElement('img');

                image.onload = function (imgEvt) {
                    var width = image.width;
                    var height = image.height;
                    var isTooLarge = false;

                    if (width > height && width > maxDimensions.width) {
                        // width is the largest dimension, and it's too big.
                        height *= maxDimensions.width / width;
                        width = maxDimensions.width;
                        isTooLarge = true;
                    } else if (height > maxDimensions.height) {
                        // either width wasn't over-size or height is the largest dimension
                        // and the height is over-size
                        width *= maxDimensions.height / height;
                        height = maxDimensions.height;
                        isTooLarge = true;
                    }

                    if (!isTooLarge) {
                        // early exit; no need to resize
                        callback(file, false);
                        return;
                    }

                    var canvas = document.createElement('canvas');
                    canvas.width = width;
                    canvas.height = height;

                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(image, 0, 0, width, height);

                    if (hasToBlobSupport) {
                        canvas.toBlob(function (blob) {
                            callback(blob, true);
                        }, file.type);
                    } else {
                        var blob = ImageTools._toBlob(canvas, file.type);
                        callback(blob, true);
                    }
                };
                ImageTools._loadImage(image, file);

                return true;
            }
        }, {
            key: '_toBlob',
            value: function _toBlob(canvas, type) {
                var dataURI = canvas.toDataURL(type);
                var dataURIParts = dataURI.split(',');
                var byteString = undefined;
                if (dataURIParts[0].indexOf('base64') >= 0) {
                    // Convert base64 to raw binary data held in a string:
                    byteString = atob(dataURIParts[1]);
                } else {
                    // Convert base64/URLEncoded data component to raw binary data:
                    byteString = decodeURIComponent(dataURIParts[1]);
                }
                var arrayBuffer = new ArrayBuffer(byteString.length);
                var intArray = new Uint8Array(arrayBuffer);

                for (var i = 0; i < byteString.length; i += 1) {
                    intArray[i] = byteString.charCodeAt(i);
                }

                var mimeString = dataURIParts[0].split(':')[1].split(';')[0];
                var blob = null;

                if (hasBlobConstructor) {
                    blob = new Blob([hasArrayBufferViewSupport ? intArray : arrayBuffer], { type: mimeString });
                } else {
                    var bb = new BlobBuilder();
                    bb.append(arrayBuffer);
                    blob = bb.getBlob(mimeString);
                }

                return blob;
            }
        }, {
            key: '_loadImage',
            value: function _loadImage(image, file, callback) {
                if (typeof URL === 'undefined') {
                    var reader = new FileReader();
                    reader.onload = function (evt) {
                        image.src = evt.target.result;
                        if (callback) {
                            callback();
                        }
                    };
                    reader.readAsDataURL(file);
                } else {
                    image.src = URL.createObjectURL(file);
                    if (callback) {
                        callback();
                    }
                }
            }
        }, {
            key: 'isSupported',
            value: function isSupported() {
                return typeof HTMLCanvasElement !== 'undefined' && hasBlobSupport && hasReaderSupport;
            }
        }]);

        return ImageTools;
    })();

    exports['default'] = ImageTools;
    module.exports = exports['default'];
</script>
