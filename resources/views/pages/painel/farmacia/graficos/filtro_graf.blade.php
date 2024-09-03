

<div class="card-body px-3 px-md-4 py-4 resultFiltro">
    <div class="d-sm-flex align-items-center  gap-4">
        <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Quantidade de exames</h2>
        <div class="d-flex gap-3 ps-lg-3">
            <div class="">
                <select name="filtro" id="filtro" class="form-select">
                    <option value="todos">Todos</option>
                    <option value="periodo">Periodo</option>
                </select>
                {{-- <div class="dropdown">
                    <button class="btn btn-light fs-18px bg-white shadow-sm border text-green " type="button"
                        id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="d-flex gap-1 align-items-center">
                            Todos
                            <img src="{{ asset('assets/img/icons/chevron-down-2.svg') }}" alt=""
                                width="25">
                        </div>
                    </button>
                    <div class="dropdown-menu fs-18px" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Todos</a>
                        <a class="dropdown-item" href="#">Período</a>
                       
                    </div> --}}
                </div>
            </div>
            <div class="">
                <div class="row periodos" style="display:none">
                    <div class="col-md-6">

                        <input type="date" name="data_ini" id="data_ini" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="data_fim" id="data_fim" class="form-control">
                    </div>
                </div>

               
                {{-- <div class="dropdown">
                    <button class="btn btn-light fs-18px bg-white shadow-sm border text-green " type="button"
                        id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="d-flex gap-1 align-items-center">
                            7 dias
                            <img src="{{ asset('assets/img/icons/chevron-down-2.svg') }}" alt=""
                                width="25">
                        </div>
                    </button>
                    <div class="dropdown-menu fs-18px" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">7 dias</a>
                        <a class="dropdown-item" href="#">7 dias</a>
                        <a class="dropdown-item" href="#">7 dias</a>
                        <a class="dropdown-item" href="#">7 dias</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
 

    {!! $qtdExames->container() !!}
                 