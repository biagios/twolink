<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Linker</title>
 <?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/meta.php";?>

</head>
    <div class="site-wrapper">
	<?php include "$_SERVER[DOCUMENT_ROOT]/heart/fade.min.php";?>
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="hidden">





          <div class="inner cover">

            <?php if(empty($_SESSION["user_connected"]) || $_SESSION["user_connected"]==false){header('Location: http://twolink.co.uk/');}
              include "$_SERVER[DOCUMENT_ROOT]/heart/head.php";
            ?>
            <h1 class="cover-heading display-3" style="font-family: 'Roboto', sans-serif;">Create your own homepage.</h1>
<p class="lead"> Edit the links below and add your own. You can also add more, as many as you need.


<!-- Makeshift Spacing -->
<hr class="my-4 invisible">
<hr class="my-4 invisible">
<h3>My pages</h3>

<div class="d-flex justify-content-center">
             <div class="col-lg-3">
                 <div class="input-group">
                   <input class="form-control" id="newPageName" type="text" placeholder="Random">
                   <span class="input-group-btn">
                     <button class="btn btn-primary" onclick="TwoLink.Ajax.Pages.NewPage(document.getElementById('newPageName').value)" type="button">Add!</button>
                   </span>
                 </div>
               </div>
             </div>
<hr class="my-7 invisible">



<div class="d-flex justify-content-center">
<table class="table table-hover w-75 p-3 border-1">

  <thead>
      <th class="text-center">Page name</th>
        <th class="text-center">Actions</th>

  </thead>
  <tbody>
    <tr>
      <?php
      						$sql = 'Select * from pages_789765 where deleted = 0 AND userId = ' . $_SESSION["userId"];
      						$pages = mysqli_query_excute($sql);

                  foreach ($pages as  $page) {
                    if(empty($page->pageName)){$page->pageName = $page->pageId;}
                    echo "<tr id = ".$page->pageId."><td>".$page->pageName."</td><td><a  href = '/".$page->pageId. "'>Edit</a> <a href = '//twolink.co.uk/".$page->pageId. "'>Preview</a> <a href = '#' onclick = 'TwoLink.Ajax.Pages.DeletePage(".$page->pageId.")'>Delete</a></td></tr>";
                  }
                   ?>
    </tr>

  </tbody>





</table>
</div>
            <p class="lead text-center">

<div class="grid-stack">
    <div class="grid-stack-item"
        data-gs-x="0" data-gs-y="0"
        data-gs-width="4" data-gs-height="2">
            <div class="grid-stack-item-content"></div>
    </div>
    <div class="grid-stack-item"
        data-gs-x="4" data-gs-y="0"
        data-gs-width="4" data-gs-height="4">
            <div class="grid-stack-item-content"></div>
    </div>
</div>

<script type="text/javascript">
$(function () {
    var options = {
        cell_height: 80,
        vertical_margin: 10
    };
    $('.grid-stack').gridstack(options);
});
</script>

            </p>

<?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/foot.php";?>


<!--
<button type="button" class="btn-lg btn-success" onclick="">Google  <i class="fa fa-pencil" aria-hidden="true"></i></button>

<!-- Invisible Makeshift Spacing --
<button type="button" class="btn-lg btn-primary invisible"></button>

<button type="button" class="btn-lg btn-danger" onclick="">Youtube  <i class="fa fa-pencil" aria-hidden="true"></i></button>

<!-- Invisible Makeshift Spacing --
<button type="button" class="btn-lg btn-primary invisible"></button>

<button type="button" class="btn-lg btn-primary" onclick="">Facebook  <i class="fa fa-pencil" aria-hidden="true"></i></button>

<!-- Invisible Makeshift Spacing --
<button type="button" class="btn-lg btn-primary invisible"></button>

<button type="button" class="btn-lg btn-info" onclick="">Twitter  <i class="fa fa-pencil" aria-hidden="true"></i></button>

<button type="button" class="btn-lg btn-link" onclick="createButton(this.parentNode);"><i class="fa fa-plus-circle" aria-hidden="true"></i></button> -->


        </div>
      </div>
    </div>
  </body>
</html>
