<?php

class User 
{
    public $name = "Convidado";
    public $email = "";
    protected $usercount = 0; // Propridade protegida, só pode ser acessada dentro da classe e em classes filhas
    private $password = "123"; // Propridade privada, só pode ser acessada dentro da classe

    // Construtores são métodos especiais que são chamados quando a classe é instanciada
    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        print "In SubClass constructor\n";
    }

    // A palavra reservada `final` é usada para impedir que uma classe seja estendida ou que um método seja sobrescrito em uma classe filha.
    // Isso é útil quando você deseja garantir que uma classe ou método tenha um comportamento específico e não deve ser alterado.
    final function copyright() {
        echo "Esta classe foi escrita por Meriéli Manzano\n";
    }
}


// O destrutor é chamado quando o objeto é destruído, que fará a limpeza liberando a memória por exemplo, de conexões abertas ou algum outro recurso reservado na classe.

// É possível extender uma classe, ou seja, criar uma nova classe que herda os métodos e propriedades de outra classe. Para isso, basta usar a palavra-chave `extends` seguida do nome da classe pai.

class Assistent extends User
{
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    function display() {
        print "". $this->name ."". $this->email . "\n";
    } 
}