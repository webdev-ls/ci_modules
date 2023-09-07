<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" class="stylesheet">
    <link rel="stylesheet" href= "<?=base_url()?>assets/richtexteditor/rte_theme_default.css"/>  
    <script type="text/javascript" src="<?=base_url()?>assets/richtexteditor/rte.js"></script>  
    <script type="text/javascript" src="<?=base_url()?>assets/richtexteditor/plugins/all_plugins.js"></script>  
    <title>Editor</title>
</head>
<body>

<form action="<?=base_url()?>editor/save" method="post">
    <textarea id="editor" name="editor"></textarea>
    <button type="submit" name="submit">Save</button>
</form>

<!-- <button type="saveButton">SAVE</button> -->
<!-- <button type="submit" onclick="window.location.href='<?php echo site_url('Editor/save'); ?>'">Save</button> -->


<script>
    var ed1 ={}
    ed1.toolbar ="full";
    var editor = new RichTextEditor('#editor',ed1);

  // document.getElementById('saveButton').addEventListener('click', function(){
  //   var htmlcontent = editor.getContent();
  //   saveHtmlContent(htmlcontent);
  // });

  // function saveHtmlContent(htmlContent) {
  //           $.post("<?php echo site_url('Editor/save'); ?>", {html_content: htmlContent}, function(data) {
  //           });
  //        }




    // var content = editor.getContent();
    // console.log(content);

    // document.getElementById("saveButton").addEventListener("click", function () {
    //     var content = editor.getContent();

    //     fetch("<?= site_url('editor/save') ?>", {
    //         method: "GET",
    //         headers: {
    //             "Content-Type": "application/x-www-form-urlencoded",
    //         },
    //         body: "content=" + encodeURIComponent(content),
    //     })
    //     .then(function (response) {
    //         if (response.ok) {
    //             console.log("Content saved successfully.");
    //         } else {
    //             console.error("Failed to save content.");
    //         }
    //     })
    //     .catch(function (error) {
    //         console.error("Error while saving content:", error);
    //     });
    // });




</script>






<!-- 
<textarea id="myTextarea"></textarea>

<script>

  var editor = new RichTextEditor('#myTextarea');
  editor.toolbar = "basic;"
  editor.init();
</script> -->


</body>
</html>





