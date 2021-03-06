<!DOCTYPE html>
<html>
  <head>
    <title>Introduce Data</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
   <base href="http://mmb.irbbarcelona.org/formacio/~dbw20/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="addField.js" language="Javascript" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="MIOD_styles.css">
    <!--Import header from patró.html-->
    <?php 
      include '../miod_scripts/patro.php';
    ?> 


  </head>
  
  <body>
  <div id="header"></div>
  <div class="container">
    <p id="com_text">Fill in the form below or upload a miod file:
    <br>
    <small><a href="./miod_web/miod_template.txt" download="miod_file_example.txt">What's a miod file?</a></small> 
    </p>
    <form method="POST" action="./miod_scripts/submit_data.php" name="input" enctype="multipart/form-data">
      <p><input name="miodfile" type="file"></p>
      <div class="container" class="form-control" class="form">
        <label>Microindel Name</label><input placeholder="Microindel name" class="form-control" type="text" name="microindel_name">
      </div>
      <div class="container" class="form-control" class="form">
        <label>Start Positon</label><input placeholder="start position of the microindel" class="form-control" type="text" name="start">
      </div>
      <div class="container" class="form-control" class="form">
        <label>End Positon</label><input placeholder="end position of the microindel" class="form-control" type="text" name="end">
      </div>
      <div class="container" class="form-control" class="form">
        <label>Chromosome</label><select placeholder="chromosome location of the microindel" class="form-control"  name="chr">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="X">X</option>
              <option value="Y">Y</option>              
        </select>
      </div>
      <div class="container" class="form-control" class="form">
        <label>Strand</label><select placeholder="strand of the microindel" class="form-control" type="text" name="strand">
              <option value="+">forward (+)</option>
              <option value="-">reverse (-)</option>
            </select>
      </div>
      <div class="container" class="form-control" class="form">
        <label>Microindel Information</label><input placeholder="Microindel extra information" class="form-control" type="text" name="microindel_info">
      </div>
      <hr>
      <div class="container" class="form-control" class="form" id="dynamicGene">
        <label>Gene</label><input placeholder="Gene name" class="form-control" type="text" name="gene[]">
      </div>
      <div class="container" class="form-control" class="form">
        <label>Gene Ensmbl ID</label><input placeholder="Ensmbl ID of the gene" class="form-control" type="text" name="EnsmblID[]">
      </div>
      <hr>
      <div class="container" class="form-control" class="form">
        <label>Clinical Significance</label><select class="form-control" name="clin_sig">
          <option value="not_provided">Not provided</option>
          <option value="benign">Benign</option>
          <option value="likely_benign">Likely Benign</option>
          <option value="association">Association</option>
          <option value="sensitivity">Confers Sensitivity</option>
          <option value="drug_res">Drug Response</option>
          <option value="protective">Protective</option>
          <option value="risk">Risk Factor</option>
          <option value="likely_pathogenic">Likely Pathogenic</option>
          <option value="pathogenic">Pathogenic</option>
          <option value="uncertain">Uncertain Significance</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="container" class="form-control" class="form" id="dynamicDisease">
        <label>Disease</label><input placeholder="Disease name related to the microindel" class="form-control" type="text" name="disease[]">
        <label>IDMIM</label><input placeholder="OMIM ID of the disease" class="form-control" type="text" name="IDMIM[]">
      </div>
      <input type="button" value="Add Disease" onClick="addFields('dynamicDisease');">
      <hr>
      <div class="container" class="form-control" class="form" id="dynamicPMID">  
        <label>PMID</label><input placeholder="PubMed ID" class="form-control" type="text" name="PMID[]">
      </div>
      <input type="button" value="Add PubMed ID" onClick="addFields('dynamicPMID');">
      <div class="container">
        <button type="submit" class="button2">Submit</button><!-- mateixa class que sing in i sign up-->
      </div>
    </form>
  </div>
  </body>
</html>