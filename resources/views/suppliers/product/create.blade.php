<x-navbar>

    <ol class="breadcrumb">
        <a href="/order/general-services">
            <i class="fa-solid fa-house"></i>
        </a>
        <li class="breadcrumb-item active"> / Fornecedores / Produtos / Adicionar Produto</li>
    </ol>


    <form>

        <div class="py-3">
            <h2>Adicionar Produto</h2>
            <p class="lead">Tenha certeza de que os dados foram informados corretamente!</p>
        </div>


        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-2 col-form-label">Selecione um Cliente</label>
            <div class="col-md-8 col-lg-10">
                <select class="form-select" id="country" required>
                    <option value="">Cliente...</option>
                    <option>United States</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="about" class="col-md-4 col-lg-2 col-form-label">Ordem de Serviço</label>
            <div class="col-md-8 col-lg-10">

                <select class="form-select" id="state" required>
                    <option value="">Ordem de Serviço...</option>
                    <option>California</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>

            </div>
        </div>

        <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-2 col-form-label">Atividade</label>
            <div class="col-md-8 col-lg-10">

                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid first name is required.
                    </div>

            </div>
        </div>

        <div class="row mb-3">
            <label for="Job" class="col-md-4 col-lg-2 col-form-label">Data de Inicio</label>
            <div class="col-md-8 col-lg-10">
                <input id="startDate" class="form-control" type="date" />
            </div>
        </div>

        <div class="row mb-3">
            <label for="Job" class="col-md-4 col-lg-2 col-form-label">Data de termino</label>
            <div class="col-md-8 col-lg-10">
                <input id="startDate" class="form-control" type="date" />
            </div>
        </div>

        <div class="row mb-3">
            <label for="Address" class="col-md-4 col-lg-2 col-form-label">Considerações</label>
            <div class="col-md-8 col-lg-10">
                <textarea class="form-control text-consideracoes" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Phone" class="col-md-4 col-lg-2 col-form-label">Situação da Ordem</label>
            <div class="col-md-8 col-lg-10">
                <select class="form-select" id="country" required>
                    <option value="">Cliente...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Email" class="col-md-4 col-lg-2 col-form-label">Selecione os Colaboradores</label>
            <div class="col-md-8 col-lg-10">
                <select class="form-select" id="country" required>
                    <option value="">Cliente...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Twitter" class="col-md-4 col-lg-2 col-form-label">Enviar Email Para</label>
            <div class="col-md-8 col-lg-10">
                <select class="form-select" id="country" required>
                    <option value="">Selecione os Funcionários...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success">Adicionar Produto</button>
        </div>
    </form><!-- End Profile Edit Form -->










</x-navbar>

