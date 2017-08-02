<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://dts.doh7.net/dts/resources/img/favicon.png">
    <meta http-equiv="cache-control" content="max-age=0" />
    <title>Document Tracking System</title>
    <!-- Bootstrap core CSS -->
    <link href="http://dts.doh7.net/dts/resources/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://dts.doh7.net/dts/resources/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="http://dts.doh7.net/dts/resources/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://dts.doh7.net/dts/resources/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="http://dts.doh7.net/dts/resources/assets/css/style.css" rel="stylesheet">
    <!-- bootstrap datepicker -->
    <link href="http://dts.doh7.net/dts/resources/plugin/datepicker/datepicker3.css" rel="stylesheet">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">

    <title>
        Home    </title>

        <!--DATE RANGE-->
        <link href="http://dts.doh7.net/dts/resources/plugin/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
        <!--CHOOSEN SELECT -->
        <link href="http://dts.doh7.net/dts/resources/plugin/chosen/chosen.css" rel="stylesheet">
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="http://dts.doh7.net/dts/resources/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet">

        <link href="http://dts.doh7.net/dts/resources/plugin/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
        <style>
        body {
            background: url('http://dts.doh7.net/dts/resources/img/backdrop.png'), -webkit-gradient(radial, center center, 0, center center, 460, from(#ccc), to(#ddd));
        }
        .loading {
            opacity:0.4;
            background:#ccc url('http://dts.doh7.net/dts/resources/img/spin.gif') no-repeat center;
            position:fixed;
            width:100%;
            height:100%;
            top:0px;
            left:0px;
            z-index:999999999;
            display: none;
        }


        input[type=checkbox] {
         transform: scale(1.5);
        }

        input[type=radio] {
         transform: scale(1.5);
        }



        .textcontain{width:800px;}
    /*    .item1{width:250px;} 
        .item2{width:550px;}
        .item1{float:left;}
        .item2{
            float:right;
            text-align: right;
        }

*/

        </style>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="http://dts.doh7.net/dts/resources/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    function newFacil(){
        $('#Add').modal('show');
        $('.modal_content').html(loadingState);
    }

    </script>
    <script type="text/javascript">
    function getPro(){
        var sel = document.getElementById('pro').value;
        if (sel == "Bohol") {
         $('#trip').html(' @foreach($bohol_data as $muncity) <option value="{{$muncity->description}}">{{$muncity->description}}</option>@endforeach');
     }else if(sel == "Cebu"){
        $('#trip').html(' @foreach($cebu_data as $muncity) <option value="{{$muncity->description}}">{{$muncity->description}}</option>@endforeach');

    }else if(sel == "Siquijor"){
        $('#trip').html(' @foreach($sequijor_data as $muncity) <option value="{{$muncity->description}}">{{$muncity->description}}</option>@endforeach');
    }else{
        $('#trip').html(' <option value="select">select</option>');
    };


}
</script>
</head>

<body>

    <!-- Fixed navbar -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="Add">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#2F4054;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class=""><i class="fa fa-file-text-o"></i> Add New Facility</h4>
                </div>
                <!--  <div class="modal_content"><center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center></div> -->
                


            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-fw fa-heartbeat"></i>
                    Health Facility

                  </a>
                </h4>
                </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">


                <!--Starts here-->
                <div class="modal-body">
                    <form style="background-color:white" class="form-horizontal">
                        <div class="box box-info">
                            <!-- /.box-header -->
                            <div class="box-body">
                              <div class="row">
                                <table >
                                    <tr>

                                        <div class="">
                                            <td>
                                                &nbsp;&nbsp;<label>Name of Health Facilty:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 120%">
                                            </td>
                                        </div>

                                    </tr>
                                    <tr>
                                        <div>
                                            <td>
                                                &nbsp;&nbsp;<label>Address:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 120%">
                                            </td>
                                            <td style="width:12%;">
                                            </td>
                                            <td>
                                                &nbsp;&nbsp;<label>Province:</label>
                                            </td>
                                            <td>
                                                <select id="pro" onchange= "getPro(this)">
                                                    <option value="select" class="col-sm-3">Select</option>
                                                    @foreach($data as $province)
                                                    <option value="{{$province->description}}" class="col-sm-3">{{$province->description}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                &nbsp;&nbsp;<label>City:</label>  
                                            </td>
                                            <td>    
                                                <select id="trip">
                                                    <option value="select">Select</option>
                                                </select>
                                            </td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>District:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 120%">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>Phone number:</label>
                                            </td>
                                            <td>
                                                <input type="number" class="" required style="width: 120%">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>Head of Facility:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 120%">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <div class="">
                                            <td style="width:17%;">
                                                &nbsp;&nbsp;<label>Nature of Ownership:</label>
                                            </td>
                                            <td style="width:12%;">
                                                <input type="radio" class="" name="r3" class="flat-red" checked> <label>DOH</label>
                                            </td>
                                            <td style="width:15%;">
                                                <input type="radio" class="" name="r3" class="flat-red" required> <label>Municipality</label>
                                            </td>
                                            <td style="width:12%;">
                                                <input type="radio" class="" name="r3" class="flat-red" required> <label>Private</label>
                                            </td>
                                            <td style="width:12%;">
                                                <input type="radio" class="" name="r3" class="flat-red" required> <label>Province</label>
                                            </td>
                                            
                                        </div>
                                    </tr>
                                    <tr>
                                        <td style="width:15%;">
                                        </td>
                                        <td style="width:15%;">
                                            <input type="radio" id="isOther" name="r3" class="flat-red" > <label>Others(specify)</label>
                                        </td>
                                        <td style="width:15%;">
                                            <input type="text" id="other" readonly>
                                        </td>
                                    </tr>
                                </table>
                                <HR>
                                <table>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>PHIC ACCREDITED:</label>
                                            </td>
                                            <td>
                                                <input type="radio" class="pa" name="phic" checked> <label>YES</label>
                                                <input type="radio" class="pa" name="phic" > <label>NO</label>
                                             <!--  <input type="radio" class="pa" ><label>YES</label>
                                                <input type="radio" class="pa" ><label>NO</label  > -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>BED CAPACITY:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 70%">
                                            
                                        </td>
                                            </div>

                                         <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>BED PERSON RATIO:</label>
                                         </td>
                                         <td>
                                             <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>CATCHMENT POPULATION:</label>
                                            </td>
                                            <td>
                                                <input type="number" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>NO. OF BRGYS:</label>
                                         </td>
                                         <td>
                                             <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>INTERLOCAL HEALTH ZONE:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>NO. OF BHS:</label>
                                         </td>
                                         <td>
                                             <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>HRS POINT PERSON:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>HRS CONTACT NO:</label>
                                         </td>
                                         <td>
                                             <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>DMO ASSIGNED:</label>
                                            </td>
                                            <td style="width:;">
                                                <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>DMO CONTACT NO:</label>
                                         </td>
                                         <td>
                                             <input type="text" class="" required style="width: 70%">
                                            </div>
                                        </td>

                                   </tr>
                                </table>    

                                <HR>
                                <table>
                                    <tr>
                                        <td>
                                            <div class="">
                                                &nbsp;&nbsp;<label>SERVICES</label> <br><bt>
                                            </td>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="lab" checked><label> WITH LABORATORY </lable>
                                            
                                            </div>
                                        </td>
                                         <td>
                                            <div class="">
                                             <input type="checkbox" name="services" value="bloodcent" ><label> WITH BLOOD CENTER FACILITY</lable>
                                         </td>
                                        
                                            </div>                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="radiograph" ><label> WITH RADIOGRAPH </lable>
                                            
                                            </div>
                                        </td>
                                        <td>
                                            &emsp;&emsp;&emsp; Specify:

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="ctscan" ><label> WITH CT SCAN </lable>
                                            
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                            &emsp;&emsp;&emsp;&emsp; <input type="checkbox" name="services" value="station" ><label> STATION </lable>
                                             </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="mri" ><label> WITH MRI </lable>
                                            
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                            &emsp;&emsp;&emsp;&emsp; <input type="checkbox" name="services" value="bsu" ><label> BLOOD SERVICE UNIT</lable>
                                             </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="pharmacy" ><label> WITH PHARMACY </lable>
                                           
                                            </div>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp;&emsp;&emsp; <input type="checkbox" name="services" value="bloodbank" readonly><label> BLOOD BANK </lable>
                                             </div>
                                        </td>


                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="stockroom" ><label> WITH STOCKROOM (FOR MEDICINES) </lable>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="">
                                            &emsp;&emsp;&emsp;&emsp; <input type="checkbox" name="services" value="mri" readonly><label> BLOOD CENTER </lable>
                                             </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="">
                                            &emsp;&emsp; <input type="checkbox" name="services" value="others" ><label> OTHERS; Specify </lable> <br>
                                             
                                        </td> 
                                           </div>                                                                               
                                    </tr>
                                </table>  

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->

                         </div>
                    </div>
                </div> <!-- closing for collapseOne -->

                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     <i class="fa fa-fw fa-male"></i>
                     Human Resource
                     <i class="fa fa-fw fa-female"></i>
                    </a>
                </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">

                    <div class="textcontain">
                    <table>
                          <tr>
                              <div class="">
                                <td style="width:30%;">
                                   <label>Staff:</label>
                                </td>
                                <td style="width:12%;">
                                    <label>Job Order</label>
                                </td>
                                <td style="width:15%;">
                                     <label>Permanent</label>
                                </td>
                                <td style="width:12%;">
                                     <label>Total</label>
                                </td>                                               
                              </div>
                        </tr>
                     </table>
                     <br>                 
                    <!--  <table>  -->
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseMed" aria-expanded="false" aria-controls="collapseMed" style='color:black'>
                           MEDICAL DOCTOR </a> 
                          
                            <div id="collapseMed" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMed">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSpec" aria-expanded="false" aria-controls="collapseSpec" style='color:black'>
                               SPECIALIST</a> <br>
                                <div id="collapseSpec" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                         
                                         
                       <tr> <br>
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNurse" aria-expanded="false" aria-controls="collapseNurse" style='color:black'>
                           REGISTERED NURSE </a> 
                          
                            <div id="collapseNurse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" style='color:black'>
                               .... </a> <br>
                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                       <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                        
                         <br> 
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTech" aria-expanded="false" aria-controls="collapseTech" style='color:black'>
                           REGISTERED MED.TECH. </a> 
                          
                            <div id="collapseTech" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2" style='color:black'>
                               .... </a> <br>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                   <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                            
                       <br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseWife" aria-expanded="false" aria-controls="collapseWife" style='color:black'>
                           REGISTERED MIDWIFE </a> 
                          
                            <div id="collapseWife" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3" style='color:black'>
                               .... </a> <br>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                  <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                       
                      </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePhar" aria-expanded="false" aria-controls="collapsePhar" style='color:black'>
                           REGISTERED PHARMACIST </a> 
                          
                            <div id="collapsePhar" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                  <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>

                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNutri" aria-expanded="false" aria-controls="collapseNutri" style='color:black'>
                           REGISTERED NUTRITIONIST </a> 
                          
                            <div id="collapseNutri" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                   <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>

                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDent" aria-expanded="false" aria-controls="collapseDent" style='color:black'>
                           REGISTERED DENTIST </a> 
                          
                            <div id="collapseDent" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                  <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>

                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDentAid" aria-expanded="false" aria-controls="collapseDentAid" style='color:black'>
                           DENTIST AID</a> 
                          
                            <div id="collapseDentAid" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>

                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSanity" aria-expanded="false" aria-controls="collapseSanity" style='color:black'>
                           REGISTERED SANITARY INSPECTOR</a> 
                          
                            <div id="collapseSanity" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                   <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                      
                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin" style='color:black'>
                           ADMIN STAFF</a> 
                          
                            <div id="collapseAdmin" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseRRT" aria-expanded="false" aria-controls="collapseRRT" style='color:black'>
                           REG. RADIATION TECHNOLOGIST</a> 
                          
                            <div id="collapseRRT" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                       </tr><br>
                        <tr> 
                         <i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseBHW" aria-expanded="false" aria-controls="collapseBHW" style='color:black'>
                           BRGY. HEALTH WORKER</a> 
                          
                            <div id="collapseBHW" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNurse">
                               &emsp;<i class="fa fa-fw fa-caret-right"></i><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11" style='color:black'>
                               ..... </a> <br>
                                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpec"> 
                      
                      
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; INTERNIST   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table> <p></p>
                       
                                     <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; PEDIATRICIAN   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                      <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OB   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; SURGEON   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table><p></p>
                                </div>
                                
                                    <table>
                                        <div class="">

                                        <td style="width:25%">
                                                   &emsp;&emsp; OTHERS   
                                                  
                                       </td>                         
                                        <td style="width:9%">
                                                       <input type="number" class="" required style="width: 40%">
                                                      
                                        </td>
                                        <td style="width:12%">
                                                       <input type="number" class="" required style="width: 40%">
         
                                        </td>
                                        <td style="width:12%">
                                            <input type="number" class="" required style="width: 40%">
 
                                       </td>
                                        </div>
                                    </table>
                            </div>
                              </div> <!--textcontain ends here-->
                       </tr>
                            
                        

                </div>


                 <div class="alert alert-jim">
                        <label>REMARKS:</label>
                            <textarea class="form-control" rows="5" placeholder="Enter here"></textarea>
                </div>
                </div>
                </div> <!--closing for collapseTwo-->




                     </div>

                </form>
            </div> <!--panel-group ends here -->

            




            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" class="btn btn-success"  onclick=""><i class="fa fa-check"></i> Add</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<nav class="navbar navbar-default navbar-static-top">
    <div class="header" style="background-color:#2F4054;padding:10px;">
        <div class="col-md-4">
            <span class="title-info">Welcome,</span> <span class="title-desc">ojt ojt</span>
        </div>
        <div class="col-md-4">
            <span class="title-info">Section:</span>
            <span class="title-desc">
                Information and Communication Technology Unit
            </span>
        </div>
        <div class="col-md-4">
            <span class="title-info">Date:</span> <span class="title-desc">Jun 20, 2017</span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="header" style="background-color:#00CC99;padding:15px;">
        <div class="container">
            <img src="http://dts.doh7.net/dts/resources/img/banner.png" class="img-responsive" />
        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/main') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-code-o"></i>&nbsp; Facilities<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/facil') }}"><i class="fa fa-file"></i>&nbsp;&nbsp; View Facilities</a><li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/adfacil') }}"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Facility</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print"></i> Print<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://dts.doh7.net/dts/document/logs"><i class="fa fa-file-archive-o"></i>&nbsp;&nbsp; Print Logs</a></li>
                        <li><a href="http://dts.doh7.net/dts/document/section/logs"><i class="fa fa-file-archive-o"></i>&nbsp;&nbsp; Print Section Logs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" data-link="http://dts.doh7.net/dts/feedback" id="feedback" title="Write a feedback" data-trigger="focus" data-container="body"  data-placement="top" data-content="Help us improve our system by just sending feedback.">
                        <i class="fa fa-sign-out"></i> Feedback
                    </a>
                </li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                        Account
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://dts.doh7.net/dts/change/password"><i class="fa fa-unlock"></i>&nbsp;&nbsp; Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="http://dts.doh7.net/dts/logout"><i class="fa fa-sign-out"></i>&nbsp;&nbsp; Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#trackDoc" data-toggle="modal"><i class="fa fa-search"></i> Track Document</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="loading"></div>


        <div class="alert alert-jim" id="inputText">
            <h2 class="page-header">Facilities</h2>    
            <form class="form-inline" method="POST" action="http://dts.doh7.net/dts/document" onsubmit="return searchDocument();" id="searchForm">
                <input type="hidden" name="_token" value="8GrOvR06DlmLe42pEZ7Bd5qNFqGi5aoOtVLcm9R9">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Quick Search" name="keyword" value="" autofocus>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>

                    <div class="btn-group">
                        <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#" onclick="newFacil()">
                            <i class="fa fa-plus"></i>  Add New
                        </a>

                    </div>
                </div>
            </form>

           <!--  <div>         
             <ul class="nav nav-tabs" role="tablist">
               <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
               <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
               <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
               <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
             </ul>

  
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    this is home
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    This is your profile
                </div>
                <div role="tabpanel" class="tab-pane fade" id="messages">These are your messages</div>
                <div role="tabpanel" class="tab-pane fade" id="settings">These are your settings</div>
            </div>

            </div> -->



            <div class="clearfix"></div>
            <div class="page-divider"></div>
            <div class="table-responsive">
                <table class="table table-list table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="3%"></th>
                            <th width="10%">NAME OF FACILITY</th>
                            <th width="10%">TYPE</th>
                            <th width="20%">PROVINCE</th>
                            <th width="15%">LICENSE</th>
                            <th width="10%">CONTACT NO.</th>
                        </tr>
                    </thead>
                    <tbody>                                                                                                    <!--  <button type="button" class="btn btn-block btn-danger btn-sm">Danger</button> -->                                          
                        <tr>
                            <td><a href="#track" data-link="http://dts.doh7.net/dts/document/track/2017-4510619094031" data-toggle="modal" class="btn btn-block btn-danger btn-sm col-sm-12"><i class="fa fa-fw fa-warning"></i> Track</a></td>
                            <td><a class="title-info" data-route="2017-4510619094031" data-link="http://dts.doh7.net/dts/document/info/2017-4510619094031/GENERAL" href="#document_info" data-toggle="modal">2017-4510619094031</a></td>
                            <td>Jun 19, 2017<br>09:40:31 AM</td>
                            <td>General Documents</td>
                            <td>
                                Trial
                            </td>
                            <td>268-3578</td>
                        </tr>  
                        <tr>
                            <td><a href="#track" data-link="http://dts.doh7.net/dts/document/track/2017-4510615081331" data-toggle="modal" class="btn btn-sm btn-success col-sm-12"><i class="fa fa-line-chart"></i> Track</a></td>
                            <td><a class="title-info" data-route="2017-4510615081331" data-link="http://dts.doh7.net/dts/document/info/2017-4510615081331/GENERAL" href="#document_info" data-toggle="modal">2017-4510615081331</a></td>
                            <td>Jun 15, 2017<br>08:13:31 AM</td>
                            <td>General Documents</td>
                            <td>
                                Practice
                            </td>
                            <td>248-1231</td>
                        </tr>  
                    </tbody>
                </table>
            </div>

        </div>
        <div class="clearfix"></div>
    </div> <!-- /container -->
    <footer class="footer">
        <div class="container">
            <p class="pull-right">
                <a href="#online" data-toggle="modal" class="online" style="color:#fff;" data-url="http://dts.doh7.net/dts/online">
                    34 Online Users | <i class="fa fa-users"></i>
                </a>
            </p>
            <p>All Rights Reserved 2017 | Version 3.2</p>

        </div>
    </footer>
    <div class="modal fade" tabindex="-1" role="dialog" id="track">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class=""><i class="fa fa-line-chart"></i> Track Document</h4>
                </div>
                <div class="modal-body">             
                    <table class="table table-hover table-form table-striped">
                        <tr>
                            <td class="col-sm-3"><label>Route Number</label></td>
                            <td class="col-sm-1">:</td>
                            <td class="col-sm-8"><input type="text" readonly id="track_route_no" value="" class="form-control"></td>
                        </tr>
                    </table>
                    <hr />                
                    <div class="track_history"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="button" class="btn btn-success" onclick="window.open('http://dts.doh7.net/dts/pdf/track')"><i class="fa fa-print"></i> Print</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" tabindex="-1" role="dialog" id="trackDoc">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class=""><i class="fa fa-line-chart"></i> Track Document</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-form">
                        <tr>
                            <form action="http://dts.doh7.net/dts/document/track" id="trackForm" onsubmit="return trackDocument(event);">
                                <input type="hidden" name="_token" value="8GrOvR06DlmLe42pEZ7Bd5qNFqGi5aoOtVLcm9R9">
                                <td class="col-sm-4"><label>Route Number</label></td>
                                <td class="col-sm-7"><input type="text" placeholder="Enter route number..." id="track_route_no2" class="form-control"></td>
                                <td class="col-sm-1"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Track</button> </td>
                            </form>
                        </tr>
                    </table>
                    <hr />
                    <div class="track_history"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="button" class="btn btn-success btn-print hide" onclick="window.open('http://dts.doh7.net/dts/pdf/track')"><i class="fa fa-print"></i> Print</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" tabindex="-1" role="dialog" id="document_form">
        <div id="my_modal" class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Create Document</h4>
                </div>
                <div class="modal_content"><center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center></div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="general_form">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <fieldset style="padding: 0px;margin:0px;">
                        <legend id="general_form_title">Create Document</legend>
                    </fieldset>
                    <div id="general_form_content">
                        <center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="document_info">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Document</h4>
                </div>
                <div class="modal-body">
                    <div class="modal_content"><center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center></div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="paperSize" style="z-index:999991;">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4><i class="fa fa-file-pdf-o"></i> Select Paper Size</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="col-xs-4">
                        <a href="http://dts.doh7.net/dts/pdf/v1/letter" class="text-success" target="_blank">
                            <i class="fa fa-file-pdf-o fa-5x"></i><br>
                            Letter
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="http://dts.doh7.net/dts/pdf/v1/a4" class="text-info" target="_blank">
                            <i class="fa fa-file-pdf-o fa-5x"></i><br>
                            A4
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="http://dts.doh7.net/dts/pdf/v1/legal" class="text-warning" target="_blank">
                            <i class="fa fa-file-pdf-o fa-5x"></i><br>
                            Legal
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br />

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="document_info_pending" style="z-index: 999999">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Document</h4>
                </div>
                <div class="modal_content"><center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="confirmation">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-question-circle"></i> DTS Says:</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <strong>Are you sure you want to remove <p style="display: inline;" id="nametoDelete"></p>?</strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                    <button type="button" class="btn btn-danger" id="confirm" data-dismiss="modal"><i class="fa fa-trash"></i> Yes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="calendar_modal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Document</h4>
                </div>
                <div class="modal_content"><center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center></div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="online" style="margin-top: 30px;z-index: 99999;">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <table class="table table-hover">
                        <caption style="font-weight: bold" class="text-success">Who's Online</caption>
                        <tbody class="onlineContent">
                            <tr>
                                <td>
                                    <center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="infoPending" style="margin-top: 30px;z-index: 99999;">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <table class="table table-hover">
                        <caption style="font-weight: bold" class="text-success"><i class="fa fa-bookmark"></i> Details</caption>
                    </table>
                    <div class="pendingInfo">

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="deleteDocument">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-question-circle"></i> DTS Says:</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <strong>Are you sure you want to delete this document?</strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="http://dts.doh7.net/dts/document/update" method="post">
                        <input type="hidden" name="_token" value="8GrOvR06DlmLe42pEZ7Bd5qNFqGi5aoOtVLcm9R9">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                        <button type="submit" name="delete" class="btn btn-danger" ><i class="fa fa-trash"></i> Yes</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://dts.doh7.net/dts/resources/assets/js/jquery.min.js"></script>
        <script src="http://dts.doh7.net/dts/resources/assets/js/jquery-validate.js"></script>
        <script src="http://dts.doh7.net/dts/resources/assets/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://dts.doh7.net/dts/resources/assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>var loadingState = '<center><img src="http://dts.doh7.net/dts/resources/img/spin.gif" width="150" style="padding:20px;"></center>'; </script>
        <!-- bootstrap datepicker -->
        <script src="http://dts.doh7.net/dts/resources/plugin/datepicker/bootstrap-datepicker.js"></script>
        <script src="http://dts.doh7.net/dts/resources/assets/js/script.js?v=1"></script>
        <script src="http://dts.doh7.net/dts/resources/assets/js/form-justification.js"></script>
        <script src="http://dts.doh7.net/dts/resources/plugin/daterangepicker/moment.min.js"></script>
        <!-- DATE RANGE SELECT -->
        <script src="http://dts.doh7.net/dts/resources/plugin/daterangepicker/daterangepicker.js"></script>
        <!-- NUMERAL JS -->
        <script src="http://dts.doh7.net/dts/resources/assets/js/Numeral-js/src/numeral.js"></script>
        <!-- SELECT CHOOSEN -->
        <script src="http://dts.doh7.net/dts/resources/plugin/chosen/chosen.jquery.js"></script>
        <!-- CKEDITOR -->
        <script src="http://dts.doh7.net/dts/resources/plugin/ckeditor/ckeditor.js"></script>
        <script src="http://dts.doh7.net/dts/resources/plugin/ckeditor/adapters/jquery.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="http://dts.doh7.net/dts/resources/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="http://dts.doh7.net/dts/resources/plugin/daterangepicker/moment.min.js"></script>
        <script src="http://dts.doh7.net/dts/resources/plugin/daterangepicker/daterangepicker.js"></script>
        <script>
        $('a[href="#general_form"]').on('click',function(){
            var title = $(this).html();
            var type = $(this).data('type');
            var url ="http://dts.doh7.net/dts/document/create";        $('#general_form_title').html(title);
            $.ajax({
                url:url+'/'+type,
                type: 'GET',
                success: function(data){
                    $('#general_form_content').html(data);
                }
            })
        });
        function searchDocument(){
            $('.loading').show();
            setTimeout(function(){
                return true;
            },2000);
        }

        function putAmount(amount){
            $('.amount').html(amount.val());
            if(amount.valueOf()==null){
                $('.amount').html('0');
            }
        }

        function preparedBy(input)
        {
            var name = input.val();
            $('input[name="fullNameC"]').val(name);
            $('input[name="fullNameD"]').val(name);
            $('input[name="fullNameE"]').val(name);
            $('input[name="fullNameH"]').val(name);
            console.log(name);
        }

        function position(input)
        {
            var name = input.val();
            $('input[name="positionC"]').val(name);
            $('input[name="positionD"]').val(name);
            console.log(name);
        }

        function pad (str, max) {
            str = str.toString();
            return str.length < max ? pad("0" + str, max) : str;
        }

        function append()
        {
            var hr='';
            var mn = '';

            for(i=0;i<=12;i++){
                var tmp = pad(i,2);
                hr += '<option>'+tmp+'</option>';
            }
            for(i=0;i<60;i++){
                var tmp = pad(i,2);
                mn += '<option>'+tmp+'</option>';
            }
            $('#append').append('<tr>' +
                '<td><input type="date" name="date[]" class="form-control"></td>' +
                '<td colspan="2"><input type="text" name="visited[]" class="form-control"></td>' +
                '<td><select name="hourA[]" class="form-control append">' +
                hr +
                '</select>'+
                '<select name="minA[]" class="form-control">' +
                mn +
                '</select>'+
                '<select name="ampmA[]" class="form-control">' +
                '<option>AM</option>' +
                '<option>PM</option>' +
                '</select>'+
                '</td>' +
                '<td><select name="hourB[]" class="form-control append">' +
                hr +
                '</select>'+
                '<select name="minB[]" class="form-control">' +
                mn +
                '</select>'+
                '<select name="ampmB[]" class="form-control">' +
                '<option>AM</option>' +
                '<option>PM</option>' +
                '</select>'+
                '</td>' +
                '<td><input type="text" name="trans[]" class="form-control"></td>'+
                '<td><input type="text" name="transAllow[]" class="form-control"></td>'+
                '<td><input type="text" name="dailyAllow[]" class="form-control"></td>'+
                '<td><input type="text" name="perDiem[]" class="form-control"></td>'+
                '<td><input type="text" name="total[]" class="form-control"></td>'+
                '</tr>');
}

function subTotal(){
    var values = {};
    var total = $('input[name="total[]"]');
    var c = 0;
    total.each(function(){
        values[c] = total.val();
        c++;
    });
    console.log(values);
}
</script>
<script>
$('#reservation').daterangepicker();
$('.daterange').daterangepicker();
$('.chosen-select').chosen({width: "100%"});
$('.chosen-select-static').chosen();

function checkDocTye(){
    var doc = $('select[name="doc_type"]').val();
    if(doc.length == 0){
        $('.error').removeClass('hide');
    }
}
</script>
<script>
function searchDocument(){
    $('.loading').show();
    setTimeout(function(){
        return true;
    },1000);
}

$('.form-submit').on('submit',function(){
    $('.btn-submit').attr("disabled", true);
});

$("a[href='#feedback']").on('click',function(){
    alert("Hello");
});

(function(){
    $('#feedback').popover('show');
    setTimeout(function(){
        $('#feedback').popover('hide');
    },2000);

    $('#feedback').click(function(){
        $('#feedback').popover('hide');
        $('#document_form').modal('show');
        $('.modal_content').html(loadingState);
        $('.modal-title').html($(this).html());
        var url = $(this).data('link');

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('.modal_content').html(data);
                $('#create').attr('action', url);
                $('input').attr('autocomplete', 'off');
            }
        });
    });
})();

$('.online').on('click',function(){
    var url = $(this).data('url');
    $('.onlineContent').html(loadingState);
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            setTimeout(function(){
                var content='';

                jQuery.each(data, function(i,val){
                    content += '<tr>' +
                    '<td class="text-success">' +
                    '<i class="fa fa-user text-bold"></i> ' +
                    val.lname+', '+val.fname+
                    '<br>' +
                    '<small class="text-muted">' +
                    '<em>(' +
                        val.description +
                        ')</em></small>' +
                ''
                '</td>'+
                '</tr>';
            });
                $('.onlineContent').html(content);
            },1000);

        }
    });
});

function removePending(e,route_no)
{
    console.log(route_no);
    $('.loading').show();
    var link = e.data('link');
    $.ajax({
        url: link,
        type: 'GET',
        success: function(){
            setTimeout(function(){
                $('.'+route_no).hide();
                $('.loading').hide();
            },1000);
        }
    });
}

function infoPending(e)
{
    $('.loading').show();
    var link = e.data('link');
    $.ajax({
        url: link,
        type: 'GET',
        success: function(data){
            setTimeout(function(){
                $('.pendingInfo').html(data);
                $('.loading').hide();
            },1000);
        }
    });
}
</script>


 <script>
            var isOther = document.getElementById("isOther");
            var other = document.getElementById("other");

            isOther.addEventListener("click", function () {
            other.readOnly = !isOther.checked;
                });

            other.addEventListener("focus", function (evt) {
            // Checkbox must be checked before data can be entered into textbox
            other.readOnly = !isOther.checked;
            });
</script>


<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

</script>



<script src="public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="public/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>

</body>
</html>