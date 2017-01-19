<input type="file" id="pic" name="pic" />
<canvas id="preview"></canvas>
<div id="actions">
    <form action="test2.php" method="POST">
        <input type="text" id="imageName" name="imageName" />
        <input type="hidden" id="contentType" name="contentType" />
        <input type="hidden" id="imageData" name="imageData" />
        <input id="btnSave" type="submit" value="Save" />
    </form>

</div>
<div id="result"></div>

<script>
function id(elementId) {
    return document.getElementById(elementId);
}

window.onload = function () {

    //constants
    var MAX_WIDHT = 200,
        MAX_HEIGHT = 200;

    var URL = window.webkitURL || window.URL;

    var inputFile = id('pic');

    inputFile.addEventListener('change', function (event) {

        var file = event.target.files[0];

        //elements
        var canvas = id('preview'),
            ctx = canvas.getContext('2d'),
            url = URL.createObjectURL(file);

        var img = new Image();

        img.onload = function () {

            var width = img.width,
                height = img.height;

            //resize
            if (width > height) {
                if (width > MAX_WIDHT) {
                    height *= MAX_WIDHT / width;
                    width = MAX_WIDHT;
                }
                else {
                    if (height > MAX_HEIGHT) {
                        width *= MAX_HEIGHT / height;
                        height = MAX_HEIGHT;
                    }
                }
            }

            canvas.width = width;
            canvas.height = height;

            ctx.drawImage(img, 0, 0, width, height);

            //Form data (POST)

            console.log(file);

            //name
            var imageName = id('imageName');
            imageName.value = file.name;

            //contentType
            var contentType = id('contentType');
            contentType.value = file.type;

            //image data
            var imageData = id('imageData'),
                dataUrl = id('preview').toDataURL('image/png').replace('data:image/png;base64,', '');

            imageData.value = dataUrl;

        };
        
        img.src = url;
        
    });

};
</script>