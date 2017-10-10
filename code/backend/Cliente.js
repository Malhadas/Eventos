
class Cliente {


    /*********Construtores****************/

    constructor(email,
                password,
                nome_completo,
                telemovel) {

        this._nome_completo = nome_completo;
        this._password = password;
        this._email = email;

        if (!(typeof telemovel === 'undefined')) {
            this._telemovel = telemovel;
        }
    }

    /***************Getters****************/

    get email() {
        return this._email;
    }

    get telemovel() {
        return this._telemovel;
    }

    get password() {
        return this._password;
    }

    get nome_completo() {
        return this._nome_completo;
    }

    /***************Setters****************/

    set email(value) {
        this._email = value;
    }

    set telemovel(value) {
        this._telemovel = value;
    }

    set password(value) {
        this._password = value;
    }

}

/*****Testes*****/

//Cliente com telemovel
const cliente1 = new Cliente('ola1@gmail.com', 'ola1', 'nome1', 91);
//Cliente sem telemovel
const cliente2 = new Cliente('ola2@gmail.com', 'ola2', 'nome2');

console.log('Cliente 1');
console.log('---------');
console.log('mail: '+cliente1.email);
console.log('password: '+cliente1.password);
console.log('nome: '+cliente1.nome_completo);
console.log('telemovel: '+cliente1.telemovel);

console.log('____________________________')

console.log('Cliente 2');
console.log('---------');
console.log('mail: '+cliente2.email);
console.log('password: '+cliente2.password);
console.log('nome: '+cliente2.nome_completo);
console.log('telemovel: '+cliente2.telemovel);

