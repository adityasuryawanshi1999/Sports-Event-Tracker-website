<?php

session_start();

?>




<?php if(isset($_SESSION['login_user'])) {} else{header('location: /index.php'); }?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript">

   $(document).ready(function() {

      $("#Schedule").click(function() {
        document.getElementById("result1").style.display="block";

        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "php/schedule-admin.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#result1").html(response);
              //alert(response);
          }

      });
  });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function(){
$.ajax({ type: "GET",
url: "php/pointstable.php",
dataType: "html",   //expect html to be returned
success: function(response){
    $("#as-it-stands-div").html(response);
      }});
});

  </script>

  <script type="text/javascript">

   $(document).ready(function() {

      $("#changes2").click(function() {
        document.getElementById("result1").style.display="block";

        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "php/schedule.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#result1").html(response);
              //alert(response);
          }

      });
  });
  });
  </script>
  <script type="text/javascript">

   $(document).ready(function() {

      $("#changes1").click(function() {
        document.getElementById("result1").style.display="block";

        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "php/schedule.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#result1").html(response);
              //alert(response);
          }

      });
  });
  });
  </script>

  <script type="text/javascript">

   $(document).ready(function() {

      $("#Tally").click(function() {
          document.getElementById('result1').style.display = "flex";
        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "php/spurthitally.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#result1").html(response);
              //alert(response);
          }

      });
  });
  });
  </script>

  <script type="text/javascript">

   $(document).ready(function() {

      $("#Points").click(function() {
        document.getElementById("result1").style.display="block";

        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "php/pointstable.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#result1").html(response);
              //alert(response);
          }

      });
  });
  });
  </script>

  <script type="text/javascript">

   $(document).ready(function() {

      $("#Results").click(function() {
        document.getElementById("result1").style.display="block";
        document.getElementById("result2").style.display="block";

        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "php/results.php",
          dataType: "html",   //expect html to be returned
          success: function(response){
              $("#result1").html(response);
              //alert(response);
          }

      });

      //from
      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "php/schedule-admin.php",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $("#result2").html(response);
            //alert(response);
          }
          });
      //end

  });
  });
  </script>



    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="/img/favicon.ico">
      <title>VESIT SPORTS</title>
      <link rel="stylesheet" href="/stylesheets/council.css">
    </head>
    <body>
      <div class="main">
          <div class="left-pane">
                <div class="logo-container">
                  <button class="option-button" onclick="openNav()">☰</button>
                  <img class="logo" src="/img/logo2.png" alt="">
                  <span class="logo-font">VESIT SPORTS</span>
                </div>
                <div class="option-panel" id="toggle-this">
                  <button type="button" id="Schedule" class="option" onclick="modifyschedule()">Modify Schedule</button>
                  <button type="button" id="Tally" class="option" onclick="modifyTally()">Modify Tally</button>
                  <button type="button" id="Points" class="option" onclick="modifyPoints()">Modify Points</button>
                  <button type="button" id="Results" class="option" onclick="modifyResults()">Modify Results</button>
                  <button class="option" onClick="window.location='index.php';" value="click here">Logout</button>
                  <button type="button" class="option2" onclick="closeNav()">Close</button>
                </div>
          </div>
          <div class="right-pane">
              <div class="ajax" id="result">
                  <span>Nothing to display at the moment :)</span>
              </div>

              <div class="ajax" id="modify-schedule" style="display:none">
                <span>Delete schedule by date:</span>
                <input type="text" name="" id="deletedate" placeholder="YYYY-MM-DD" style="margin-left:3px" size="7">
                <button class="delete-button" type="button" name="button" id="delet" onclick="deleteyesterday()">Delete</button>
                <button class="delete-button1" type="button" id="changes2">Check changes</button>
              </div>
              <div class="ajax" id="modify-schedule1" style="display:none">
                <span>Delete schedule by MatchID:</span>
                <input type="text" name="" id="deleteid" placeholder="" style="margin-left:3px" size="3">
                <button class="delete-button" type="button" name="button" id="delet" onclick="deleteyesterdaybymatchid()">Delete</button>

                <button class="delete-button1" type="button" id="changes1">Check changes</button>

              </div>
              <div class="ajax" id="modify-schedule2" style="display:none">
                <div class="load-right">
                  <span>Add event(s):</span>
                  <br>
                  <form class="form" action="" method="post">
                      <input type="text" id="date" name="date" value="" placeholder="YYYY-MM-DD" style="height:19px">
                      <select id="classA" name="classA" style="height:24px">
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                      </select>
                      <select id="classB" name="classB" style="height:24px">
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                      </select>
                      <select id="game" name="game" style="height:24px">
                        <option value="Football">Football</option>
                        <option value="Kabaddi">Kabaddi</option>
                        <option value="Cricket">Cricket</option>
                        <option value="Kho-Kho">Kho-Kho</option>
                      </select>
                      <input type="time" id="time" name="time" value="" style="height:21px">
                      <select id="category" name="category" style="height:24px">
                        <option value="G">G</option>
                        <option value="B">B</option>
                      </select>
                      <button type="button" name="submit" class="delete-button" id="insert-button">Add</button>
                  </form>
                </div>
              </div>
              <div class="ajax" id="tally-div" style="display:none">
                <span>Remove tally from table:</span>

              </div>
              <div class="ajax" id="tally-div1" style="display:none">
                <span>Class:</span>
                <select id="tally-remove-class" name="talyy-remove-class" style="height:24px;margin-left:6px;">
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                </select>
                <span style="margin-left:6px;"> Title:</span>
                <input type="text" name="tally-remove-value" id="tally-remove-value" value=""  style="margin-left:6px;" size="5">
                <span style="margin-left:6px;"> Points:</span>
                <select id="tally-remove-points" name="talyy-remove-points" style="height:24px;margin-left:6px;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                </select>
                <button type="button" name="tally-remove-button" class="delete-button" id="tally-remove-button">Remove</button>

              </div>

              <div class="ajax" id="tally-div2" style="display:none">
                <span>Add to tally table:</span>
              </div>
              <div class="ajax" id="tally-div3" style="display:none">
                <span>Class:</span>
                <select id="tally-add-class" name="talyy-add-class" style="height:24px;margin-left:6px;">
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                </select>
                <span style="margin-left:6px;"> Title:</span>
                <input type="text" name="tally-add-value" id="tally-add-value" value=""  style="margin-left:6px;" size="5">
                <span style="margin-left:6px;"> Points:</span>
                <select id="tally-add-points" name="talyy-add-points" style="height:24px;margin-left:6px;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                </select>
                <button type="button" name="tally-add-button" class="delete-button" id="tally-add-button">Add</button>

              </div>

              <div class="ajax" id="points-div" style="display:none">
                <span>Add to points table:</span>

              </div>

              <div class="ajax" id="points-div1" style="display:none">
                <span>Class:</span>
                <select id="points-add-class" name="-points-add-class" style="height:24px;margin-left:6px;">
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="D5">D5</option>
                  <option value="D6">D6</option>
                </select>
                <span style="margin-left:5px">Points to add</span>
                <select id="points-add-points" name="-points-add-points" style="height:24px;margin-left:6px;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                </select>
                <button type="button" name="-points-add-button" class="delete-button" id="points-add-button">Add</button>
              </div>

              <div class="ajax" id="points-div2" style="display:none">
                <span>Subtract from points table</span>
              </div>

              <div class="ajax" id="points-div3" style="display:none">
                <span>Class:</span>
                <select id="points-remove-class" name="-points-remove-class" style="height:24px;margin-left:6px;">
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="D5">D5</option>
                  <option value="D6">D6</option>
                </select>
                <span style="margin-left:5px">Points to subract</span>
                <select id="points-remove-points" name="-points-remove-points" style="height:24px;margin-left:6px;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                </select>
                <button type="button" name="-points-remove-button" class="delete-button" id="points-remove-button">Remove</button>
              </div>

              <div class="ajax" id="results-div" style="display:none">
                <span>Add match results:</span>
              </div>

              <div class="ajax" id="results-div1" style="display:none">
                <span>Choose MatchID:</span>
                <input type="text" name="results-add-value" id="results-add-value" value=""  style="margin-left:6px;" size="1">
                <span style="margin-left:4px">Choose winner class:</span>
                <select id="results-add-class" name="results-add-class" style="height:24px;margin-left:6px;">
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="D5">D5</option>
                  <option value="D6">D6</option>
                  <option value="D7">D7</option>
                  <option value="D8">D8</option>
                  <button type="button" name="-results-add-button" class="delete-button" id="results-add-button">Add</button>
                </select>
              <button type="button" name="-results-add-button" class="delete-button" id="results-add-button">Add</button>
              </div>

              <div class="ajax" id="results-div2" style="display:none">
                <span>Remove match results:</span>
              </div>

              <div class="ajax" id="results-div3" style="display:none">
                <span>Choose MatchID:</span>
                <input type="text" name="results-remove-value" id="results-remove-value" value=""  style="margin-left:6px;" size="1">
                <span style="margin-left:4px">Choose winner class:</span>
                <select id="results-remove-class" name="results-remove-class" style="height:24px;margin-left:6px;">
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="D5">D5</option>
                  <option value="D6">D6</option>
                  <option value="D7">D7</option>
                  <option value="D8">D8</option>
                </select>
              <button type="button" name="-results-remove-button" class="delete-button" id="results-remove-button">Remove</button>
              </div>

              <div class="ajax" id="result1" style="display:none">

              </div>

              <div class="ajax" id="result2" style="display:none">
                <span>For reference schedule:</span>
              </div>


              </div>
              <div class="as-it-stands" id="as-it-stands">
                <span style="margin-left:auto;margin-right:auto;margin-top:10px;">AS IT STANDS(POINTS TABLE)</span>
                <div class="as-it-stands-div" id="as-it-stands-div">

                </div>
              </div>


          </div>
      <script type="text/javascript">
        function modifyschedule() {
          closeall();
          document.getElementById('modify-schedule').style.display='flex';
          document.getElementById('modify-schedule1').style.display='flex';
          document.getElementById('modify-schedule2').style.display="flex";

        }

      </script>

      <script type="text/javascript">
        function modifyTally() {
          closeall();
          document.getElementById('tally-div').style.display='flex';
          document.getElementById('tally-div1').style.display='flex';
          document.getElementById('tally-div2').style.display='flex';
          document.getElementById('tally-div3').style.display='flex';

        }

      </script>

      <script type="text/javascript">
        function modifyPoints() {
          closeall();
          document.getElementById('points-div').style.display='flex';
          document.getElementById('points-div1').style.display='flex';
          document.getElementById('points-div2').style.display='flex';
          document.getElementById('points-div3').style.display='flex';

        }

      </script>

      <script type="text/javascript">
        function modifyResults() {
          closeall();
          document.getElementById('results-div').style.display='flex';
          document.getElementById('results-div1').style.display='flex';
          document.getElementById('results-div2').style.display='flex';
          document.getElementById('results-div3').style.display='flex';

        }

      </script>

      <script type="text/javascript">
        function closeall() {
          document.getElementById('modify-schedule').style.display='none';
          document.getElementById('modify-schedule1').style.display='none';
          document.getElementById('modify-schedule2').style.display="none";
          document.getElementById('result').style.display='none';
          document.getElementById('tally-div').style.display='none';
          document.getElementById('tally-div1').style.display='none';
          document.getElementById('tally-div2').style.display='none';
          document.getElementById('tally-div3').style.display='none';
          document.getElementById('result1').style.display='none';
          document.getElementById('result2').style.display='none';
          document.getElementById('points-div').style.display='none';
          document.getElementById('points-div1').style.display='none';
          document.getElementById('points-div2').style.display='none';
          document.getElementById('points-div3').style.display='none';
          document.getElementById('results-div').style.display='none';
          document.getElementById('results-div1').style.display='none';
          document.getElementById('results-div2').style.display='none';
          document.getElementById('results-div3').style.display='none';

        }

      </script>

      <script type="text/javascript">
          function openNav(){
            document.getElementById("toggle-this").style.display="flex";
          }
          function closeNav()
          {
            document.getElementById("toggle-this").style.display="none";
          }

      </script>
      <script>
    function deleteyesterday() {
    var str=document.getElementById('deletedate').value
    document.getElementById('deletedate').value="";
    var xhttp;
    if (str == "") {
      document.getElementById("result").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert("Records deleted successfully")
      }
    };
    xhttp.open("GET","php/deleteyesterday.php?q="+str, true);
    xhttp.send();
    }
    </script>

    <script>
  function deleteyesterdaybymatchid() {
  var str=document.getElementById('deleteid').value
  document.getElementById('deleteid').value="";
  var xhttp;
  if (str == "") {
    document.getElementById("result").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("Records deleted successfully")
    }
  };
  xhttp.open("GET","php/deleteyesterdaybymatchid.php?q="+str, true);
  xhttp.send();
  }
  </script>

  <script>
  $(document).ready(function() {
  	$('#insert-button').live('click', function() {
  		$("#insert-button").attr("disabled", "disabled");
  		var date = $('#date').val();
  		var classA = $('#classA').val();
  		var classB = $('#classB').val();
  		var game = $('#game').val();
      var time = $('#time').val();
      var category = $('#category').val();
  		if(date!="" && classA!="" && classB!="" && game!="" && time!="" && category!=""){
  			$.ajax({
  				url: "php/insert.php",
  				type: "POST",
  				data: {
  					date: date,
  					classA: classA,
  					classB: classB,
  					game: game,
            time:time,
            category:category
  				},
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#insert-button").removeAttr("disabled");
              alert("Records added successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#insert-button").removeAttr("disabled");
  		}
  	});
  });
  </script>

  <script>
  $(document).ready(function() {
  	$('#tally-remove-button').live('click', function() {
  		$("#tally-remove-button").attr("disabled", "disabled");
  		var classA = $('#tally-remove-class').val();
  		var value = $('#tally-remove-value').val();
  		var points = $('#tally-remove-points').val();
  		if(classA!="" && value!="" && points!=""){
  			$.ajax({
  				url: "php/removeTally.php",
  				type: "POST",
  				data: {
  					classA: classA,
  					value: value,
  					points: points,
            },
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#tally-remove-button").removeAttr("disabled");
              alert("Record deleted successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#tally-remove-button").removeAttr("disabled");
  		}
  	});
  });
  </script>

  <script>
  $(document).ready(function() {
  	$('#tally-add-button').live('click', function() {
  		$("#tally-add-button").attr("disabled", "disabled");
  		var classA = $('#tally-add-class').val();
  		var value = $('#tally-add-value').val();
  		var points = $('#tally-add-points').val();
  		if(classA!="" && value!="" && points!=""){
  			$.ajax({
  				url: "php/addTally.php",
  				type: "POST",
  				data: {
  					classA: classA,
  					value: value,
  					points: points,
            },
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#tally-add-button").removeAttr("disabled");
              alert("Record deleted successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#tally-add-button").removeAttr("disabled");
  		}
  	});
  });
  </script>

  <script>
  $(document).ready(function() {
  	$('#points-add-button').live('click', function() {
  		$("#points-add-button").attr("disabled", "disabled");
  		var classA = $('#points-add-class').val();
  		var points = $('#points-add-points').val();
  		if(classA!="" && points!=""){
  			$.ajax({
  				url: "php/addPoints.php",
  				type: "POST",
  				data: {
  					classA: classA,
  					points: points,
            },
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#points-add-button").removeAttr("disabled");
              alert("Points added successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#points-add-button").removeAttr("disabled");
  		}
  	});
  });
  </script>

  <script>
  $(document).ready(function() {
  	$('#points-remove-button').live('click', function() {
  		$("#points-remove-button").attr("disabled", "disabled");
  		var classA = $('#points-remove-class').val();
  		var points = $('#points-remove-points').val();
  		if(classA!="" && points!=""){
  			$.ajax({
  				url: "php/subtractPoints.php",
  				type: "POST",
  				data: {
  					classA: classA,
  					points: points,
            },
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#points-remove-button").removeAttr("disabled");
              alert("Points subtracted successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#points-remove-button").removeAttr("disabled");
  		}
  	});
  });
  </script>

  <script>
  $(document).ready(function() {
  	$('#results-add-button').live('click', function() {
  		$("#results-add-button").attr("disabled", "disabled");
  		var match_id = $('#results-add-value').val();
  		var winner = $('#results-add-class').val();
  		if(match_id!="" && winner!=""){
  			$.ajax({
  				url: "php/insertresults.php",
  				type: "POST",
  				data: {
  					match_id: match_id,
  					winner: winner,
            },
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#results-add-button").removeAttr("disabled");
              alert("Results added successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#results-add-button").removeAttr("disabled");
  		}
  	});
  });
  </script>

  <script>
  $(document).ready(function() {
  	$('#results-remove-button').live('click', function() {
  		$("#results-remove-button").attr("disabled", "disabled");
  		var match_id = $('#results-remove-value').val();
  		var winner = $('#results-remove-class').val();
  		if(match_id!="" && winner!=""){
  			$.ajax({
  				url: "php/removeresults.php",
  				type: "POST",
  				data: {
  					match_id: match_id,
  					winner: winner,
            },
  				cache: false,
  				success: function(dataResult){
  					var dataResult = JSON.parse(dataResult);
  					if(dataResult.statusCode==200){
  						$("#results-remove-button").removeAttr("disabled");
              alert("Results removed successfully");
  					}
  					else if(dataResult.statusCode==201){
  					   alert("Error occured !");
  					}

  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
        $("#results-remove-button").removeAttr("disabled");
  		}
  	});
  });
  </script>


    </body>
  </html>
