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
    <img src="images/cartes.png" style="height: 150px; margin-left: 15px;">
    
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
                                 <img src="images/cartes.png" style="height: 150px; margin-left: 30px; margin-top: 20px;">
                            </div>
                        
                            <!--------- Descripcio -------------->
                            <div class="col-sm-8">

                                <h2>Nom del producte</h2>

                                <br>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        
                        <!--------- Separacio -------------->
                        <hr>
                        
                        <!--------- Aposta -------------->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-3">
                                    <!--null-->    
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="number" class="form-control" aria-label="Text input with checkbox" placeholder="0" style="text-align:center">
                                        <span class="input-group-addon">€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-1">
                                    <!--null-->    
                                </div>
                                
                                <div class="col-sm-3">
                                    
                                    <br>
                                    
                                    <div class="flex-item">
                                        <h4 style="color: #000"><span class="glyphicon glyphicon-time"></span> 15:30</h4>
                                        <h4 style="color: #000"><span class="glyphicon glyphicon-user"></span> 1234</h4> 
                                    </div>
                                </div>
                                
                                <inputs><input name="thumb-roundness" ngmodel="slider['contrast']" label="" class="form-control ng-valid ng-scope ng-dirty" min="0" max="50" step="1" ng-model="slider['contrast']" type="range"><input name="thumb-roundness" ngmodel="slider['contrast']" label="" class="form-control ng-valid ng-scope ng-dirty" min="0" max="50" step="1" ng-model="slider['contrast']" type="text"></inputs>
                                
                                
                                <div class="col-sm-4">
                                    <form method="post" action="/action_page_post.php">
                                        <div data-role="rangeslider">
                                            <input type="range" name="price-min" id="price-min" value="0" min="0" max="999" class="slider">
                                        </div>
                                        <input type="submit" data-inline="true" value="Submit">
                                    </form>
                                </div>
                                
                                <div class="col-sm-3">
                                    <h4>Aposta tot</h4>
                                </div>
                            </div>
                        </div>
                    
                        <br>
                        
                        <!--------- Modal footer -------------->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Aposta</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>