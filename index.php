
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="sensors">Home Monitor</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="sensors">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                System functions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        User commands
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <?php if (session()->get('isLoggedIn')): ?>

                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="register">Register another account</a>
                                            <a class="nav-link" href="changeDetails">Change account details</a>
                                            <a class="nav-link" href="logout">Logout</a>
                                        </nav>
                                    </div>


                                        <?php else: ?>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/">Login</a>
                                            <a class="nav-link" href="register">Register</a>
                                            
                                        </nav>
                                    </div>
                                    <?php endif; ?>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="#analytics">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Analytics
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"> <h1> User logged in,<?=session()->get('firstname')?></h1> </div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Your Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                         Welcome,<?=session()->get('firstname')?>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Temperature Room 1</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="https://api.thingspeak.com/channels/1365133/fields/2/last.json">Request JSON data from the channel </a> 
                                        <div class="temperature"> </div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Humidity Sensor</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://api.thingspeak.com/channels/1365133/fields/2/last.json">Request JSON data from the channel</a>
                                        <div class="humidity"></div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Soil Moisture Sensor</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://api.thingspeak.com/channels/1365133/fields/3/last.json">Request JSON data from the channel</a>
                                        <div class="moisture"></div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Motion detection sensor</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://api.thingspeak.com/channels/1365133/fields/4/last.json">Request JSON data from the channel</a>
                                        <div class="detection"></div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Temperature
                                    </div>
                                    <div class="card-body"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/charts/1?bgcolor=%23+FF0D0D&color=%23+FF0D0D&days=1&dynamic=true&results=60&timescale=10&type=line&xaxis=Time&yaxis=Percentage"></iframe>

                                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/widgets/307782"></iframe>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Humidity
                                    </div>
                                    <div class="card-body"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/charts/2?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=60&timescale=10&type=line&xaxis=Time&yaxis=Percentage"></iframe>

                                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/widgets/307783"></iframe>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Soil moisture
                                    </div>
                                    <div class="card-body"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/charts/3?bgcolor=%23ffffff&color=%23d62020&days=7&dynamic=true&results=60&timescale=daily&type=line&xaxis=Time&yaxis=Percentage"></iframe>

                                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/widgets/307787"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Motion detections
                                    </div>
                                    <div class="card-body"> <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/charts/4?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=60&type=line&xaxis=Time&yaxis=Detections"></iframe>

                                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1365133/widgets/307786"></iframe>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Average weekly humidity levels
                                    </div>
                                    <div class="card-body" id="analytics"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1367862/widgets/307885"></iframe>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Current temperature: Newcastle Upon Tyne
                                    </div>
                                    <div class="card-body"> <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1364997/widgets/307884"></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                                     <script>
                                         $.getJSON('https://api.thingspeak.com/channels/1365133/fields/1/last.json', function(data) {
            
                                            var text = `Live Temperature Value: ${data.field1}`
                        
                                             $(".temperature").html(text);
                                             });

                                             $.getJSON('https://api.thingspeak.com/channels/1365133/fields/2/last.json', function(data) {
            
                                                var text = `Live Humidity Value: ${data.field2}`

                                            $(".humidity").html(text);
                                                });

                                                $.getJSON('https://api.thingspeak.com/channels/1365133/fields/3/last.json', function(data) {
            
                                                var text = `Live Soil Moisture Value: ${data.field3}`

                                                    $(".moisture").html(text);
                                                    });

                                                    $.getJSON('https://api.thingspeak.com/channels/1365133/fields/4/last.json', function(data) {
            
                                                    var text = ` Live Motion Detection Value : ${data.field4}`

                                                 $(".detection").html(text);
                                                    });
                                     </script>
                </main>
                
