<style> 
    .flex-container {
        display: -webkit-flex;
        display: flex;
        width: 100%;
        height: 100%;
    }

    .flex-item {    
        width: 100px;
        margin-left: 12px;
        margin-right: 5px;
        margin-top: 10px;
    }
    
    #ex1Slider .slider-selection {
	   background: #BABABA;
    }   
</style>

<script>
    // With JQuery
    $('#ex1').slider({
        formatter: function(value) {
            return 'Current value: ' + value;
        }
    });

    // Without JQuery
    var slider = new Slider('#ex1', {
        formatter: function(value) {
            return 'Current value: ' + value;
        }
    });
</script>

<div class="well well-lg" style="width: 220px;">
    <img src="../public/images/cartes.png" style="height: 150px; margin-left: 15px;">
    
    <div class="flex-container">
        <div class="flex-item">
            <h4 style="color: #000">Nom del producte</h4>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#aposta">
                <a href="#" class="boto">Aposta</a>
            </button>
        </div>
        
        <div class="flex-item">
                <h5 style="color: #000"><span class="glyphicon glyphicon-list-alt"></span> info</h5>
                <h5 style="color: #000"><span class="glyphicon glyphicon-time"></span> 15:30</h5>
                <h5 style="color: #000"><span class="glyphicon glyphicon-user"></span> 1234</h5> 
            </div>
        
        <!-- Trigger the modal with a button -->

        <!-- Modal -->
        <div class="modal fade" id="aposta" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Realitza la teva aposta</h4>
                    </div>
                    <!-- Modal body-->
                    <div class="modal-body">
                        
                        <!--------- Imatge -------------->
                        <div class="row content">
                            <div class="col-sm-4">
                                 <img src="../public/images/cartes.png" style="height: 150px; margin-left: 30px; margin-top: 20px;">
                            </div>
                        
                            <!--------- Descripcio -------------->
                            <div class="col-sm-8">

                                <h2>Nom del producte</h2>

                                <br>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        
                        <!--------- Separacio -------------->
                        <hr>
                        
                        <!--------- Aposta -------------->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">€</span>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div>
                                    <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                </div>
                        </div>
                        
                        <!--------- Botons -------------->
                        <div class="row content">
                            <div class="col-sm-4">
                                <!-- null -->
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-success">
                                    <a href="#" class="boto">Aposta</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <a href="#" class="boto">Cancela</a>
                                </button>
                            </div>
                        </div>
                    
                        <!--------- Modal footer -------------->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tanca</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>