 
 
 
 <?php  include '../nav/header1.php' ?> <script src="js/js.js"></script>

  <div style="margin-left: 300px;padding: 1px 16px;height: 1000px; margin-top: -900px">

  
<body style="background-color:rgb(253,235,235)">

<!-- Modal trigger button -->
 <div
    class="row justify-content-center align-items-center g-2"
 >
    <div class="col"><div class="card" style="width: 18rem;">
  <img src="img/factu.png" class="card-img-top" alt="..." style="width:50%;text-aling:center;margin:auto;padding:auto">
  <div class="card-body">
    <a href="#" class="btn btn-primary" style="margin-left: 70px" data-bs-toggle="modal"
    data-bs-target="#modalId2" >Crear Facturas</a>
  </div>

</div></div>
    <div class="col"><div class="card" style="width: 18rem;">
  <img src="img/recib.png" class="card-img-top" alt="..."style="width:50%;text-aling:center;margin:auto;padding:auto">
  <div class="card-body">
    
    <a href="#" class="btn btn-primary" style="margin-left: 70px" data-bs-toggle="modal" data-bs-target="#modalId">Crear Recibo</a>
  </div>
</div></div>
    
 </div>
 
<BR></BR>

<div
    class="row justify-content-center align-items-center g-2"
>
    <div class="col"><div class="card" style="width: 18rem;">
  <img src="img/repor.png" class="card-img-top" alt="..."style="width:50%;text-aling:center;margin:auto;padding:auto">
  <div class="card-body">
    
    <a href="#" class="btn btn-primary" style="margin-left: 70px">Reporte</a>
  </div>
</div></div>
    <div class="col"><div class="card" style="width: 18rem;">
  <img src="img/guard.png" class="card-img-top" alt="..."style="width:50%;text-aling:center;margin:auto;padding:auto">
  <div class="card-body">
  
    <a href="#" class="btn btn-primary" style="margin-left: 70px">Guardar</a>
  </div>
</div></div>
    
</div>








         </div>

         <!-- ========== Start modal 1 crar recibo ========== -->
<!-- Modal trigger button -->


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="modalId"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-ruled" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5zM3 12v-2h2v2zm0 1h2v2H4a1 1 0 0 1-1-1zm3 2v-2h7v1a1 1 0 0 1-1 1zm7-3H6v-2h7z"/>
</svg> facturacion
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">


         <!-- Crear recibo-->


            <div
                class="card border-dark"
            >
              
                <div class="card-body">
                    <h4 class="card-title" style="float:right;color:blue">RECIBO Nª: <span id="demo"></span></h4>
                    <br>
                    <p class="card-text"><div class="mb-3">
                       
                        <input
                            type="date"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            style="width:200px;float:right"
                        />
            
                    </div>
                    </p>
                </div>
            </div>
            

<div
    class="card border-primary"
>

    <div class="card-body">
        <h5 class="card-title">recibi de:<span id="demo1"></span></</h5>
        <p class="card-text">La cantidad de:<span id="demo2"></span></p>
        <p class="card-text">por:<span id="demo3"></span></p>







<span>€</span> euros
<span class="border border-2 border-dark d-inline-block" style="width:100px; height:30px;" id="demo4"></span>

    </div>
</div>












            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Cerrar
                </button>
                <button type="button" class="btn btn-primary" onclick="factura()">Crear</button>
                 <button type="button" class="btn btn-danger" onclick="window.print()">Imprimir</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script>


  <!-- Crear factura-->

  <!-- Modal trigger button -->

  >
    Launch
  </button>
  
  <!-- Modal Body -->
  <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
  <div
    class="modal fade"
    id="modalId2"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
  >
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Modal title
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">Body</div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Optional: Place to the bottom of scripts -->
  <script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId2"),
        options,
    );
  </script>
  
        
            
         </body>


