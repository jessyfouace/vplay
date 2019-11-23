<?php
include("template/header.php"); ?>

<!-- 
if (!isset($_SESSION['nocookies'])) {
  if (!isset($_COOKIE['acceptation'])) {
    require("../views/cookiesVue.php");
  } else {
    $_SESSION['nocookies'] = 'true';
  }
} ?> -->
<div class="text-white p-lg-5" style="margin-top: 12vh">

    <form class="col-12 text-center row" id="upload_form" enctype="multipart/form-data" method="post">
        <div class="col-lg-6 col-10 mx-auto text-left">
            <label for="title">Titre de la vidéo:</label><br>
            <input class="text-dark col-12" type="text" name="title" id="title" placeholder="Titre" required>

            <label class="mt-2" for="desc">Description de la vidéo:</label><br>
            <textarea class="text-dark col-12" name="desc" id="desc" placeholder="Description de la vidéo.." cols="85" rows="10" required></textarea>

            <label class="mt-2"  for="category-select">Catégorie de la vidéo</label><br>
            <select id="category-select" name="category-select" class="text-dark col-12" required>
                <option value="" selected disabled>--Catégorie--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>

        </div>
        <div class="col-lg-6 col-10 mx-auto">
            <div>
                <input type='file' id="file2" accept="image/*" name="file2" class="d-none" onchange="readURL(this)" required />
                <label class="col-12" for="file2"><img class="col-md-9 col-12" style="height: 400px;" id="blah" src="http://localhost/youtube/youtube/assets/img/loadImage.png" alt="your image" /></label>
            </div>

            <div>
                <input type='file' id="file1" accept="video/mp4,video/x-m4v,video/*" name="file1" class="d-none" onchange="uploadFile()" required />
                <label for="file1"><img style="width: 250px; height: 250px;" id="blah2" src="http://localhost/youtube/youtube/assets/img/loadVideo.png" alt="your video" /></label>
            </div>

            <progress id="progressBar" value="0" max="100" style="width:250px;"></progress>
            <h3 id="status"></h3>
            <p id="loaded_n_total"></p>
        </div>
        <div class="col-12 text-center">
            <input class="btn btn-primary pl-4 pr-4 pt-1 pb-1" type="submit" value="Valider">
        </div>
    </form>

    <script>
        function _(el) {
            return document.getElementById(el);
        }

        function uploadFile() {
            var file = _("file1").files[0];
            // ------------------------ alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();
            formdata.append("file1", file);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "file_upload_parser.php"); // -------------------------- http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            // ------------------------- use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function progressHandler(event) {
            // ------------------------ _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
            let takeVideo = document.getElementById("blah2");
            takeVideo.classList.add("d-none");
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = "Téléchargement vidéo: " + Math.round(percent) + "%";
        }

        function completeHandler(event) {
            // ------------------------ _("status").innerHTML = event.target.responseText;
            // ------------------------ _("progressBar").value = 0; //wil clear progress bar after successful upload
        }

        function errorHandler(event) {
            _("status").innerHTML = "Upload Failed";
        }

        function abortHandler(event) {
            _("status").innerHTML = "Upload Aborted";
        }
    </script>

</div>
<?php
include("template/footer.php"); ?>