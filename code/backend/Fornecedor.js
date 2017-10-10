class Fornecedor extends Cliente{


    /*********Construtores****************/

    constructor(email,
                password,
                nome_completo,
                telemovel,
                nome_da_entidade,
                servicos,
                descricao,
                local_da_sede,
                zona_de_atividade) {

        super(email,password,nome_completo,telemovel);

        this._nome_da_entidade  = nome_da_entidade;
        this._servicos          = servicos;
        this._descricao         = descricao;
        this._local_da_sede     = local_da_sede;
        this._zona_de_atividade = zona_de_atividade;
        this._nome_completo = nome_completo;
    }

    /***************Getters****************/

    get email() {
        return super.email;
    }

    get telemovel() {
        return super.telemovel;
    }

    get password() {
        return super.password;
    }

    get nome_completo() {
        return super.nome_completo;
    }

    get nome_da_entidade() {
        return this._nome_da_entidade;
    }

    get servicos() {
        return this._servicos;
    }

    get descricao() {
        return this._descricao;
    }

    get local_da_sede() {
        return this._local_da_sede;
    }

    get zona_de_atividade() {
        return this._zona_de_atividade;
    }

    /***************Setters****************/

    set email(value) {
        super.email(value);
    }

    set telemovel(value) {
        super.telemovel(value);
    }

    set password(value) {
        super.password(value);
    }

    set nome_completo(value) {
        this._nome_completo = value;
    }

    set nome_da_entidade(value) {
        this._nome_da_entidade = value;
    }

    set servicos(value) {
        this._servicos = value;
    }

    set descricao(value) {
        this._descricao = value;
    }

    set local_da_sede(value) {
        this._local_da_sede = value;
    }

    set zona_de_atividade(value) {
        this._zona_de_atividade = value;
    }

    /*******Funcoes*******/

    faz_servico(servico) {
        return (this._servicos).includes(servico);
    }

}

/*****Testes*****/

//Cliente com telemovel
const fornecedor1 = new Fornecedor('ola1@gmail.com',
    'ola1',
    'nome1',
    91,
    'entidade1',
    ['servico1','servico2','servico3'],
    'descricao do que faco 1',
    'local 1',
    'zona 1');

console.log('Fornecedor 1');
console.log('---------');
console.log('mail:      ' + fornecedor1.email);
console.log('password:  ' + fornecedor1.password);
console.log('nome:      ' + fornecedor1.nome_completo);
console.log('telemovel: ' + fornecedor1.telemovel);
console.log('entidade:  ' + fornecedor1.nome_da_entidade);
console.log('servicos:  ' + fornecedor1.servicos);
console.log('descricao: ' + fornecedor1.descricao);
console.log('local:     ' + fornecedor1.local_da_sede);
console.log('zona:      ' + fornecedor1.zona_de_atividade);
console.log('____________________________');
console.log('fornecedor1 contem servico1? ' + fornecedor1.faz_servico('servico1'));
console.log('fornecedor1 contem servico90? ' + fornecedor1.faz_servico('servico90'));

