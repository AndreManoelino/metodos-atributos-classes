<?php
abstract class Pessoa {
    protected $idade;
    public function __construct($idade) {
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    abstract public function apresentar();
}

class HomemAdulto extends Pessoa {
    private $profissao;

    public function __cosntruct($idade, $profissao){
    parent ::__construct($idade);
    $this->profissao = $profissao;
    }
    public function getProfissao(){
        return $this->profissao;
    }
    public function setProfissao($profissao){
        $this->profissao = $profissao;
    }
    public function apresentar() {
        return "Sou homem adulto de {$this->idade} anos. Minha profissão é {$this->profissao}. ";

    }
    public function trabalhar(){
        return "Eu estou trabalhando como {$this->profissao}. ";
    }

}
class MulherAdulta extends Pessoa {
    private $estadoCivil;
    public function __construct ($idade, $estadoCivil){
        parent ::__construct($idade);
        $this->estadoCivil = $estadoCivil;
    }
    public function getEstadoCivil(){
        return $this->estadoCivil;
    }
    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
    }
    public function  apresentar(){
        return "Sou uma mulher adulta de  {$this->idade} anos. E meu estado civil e {$this->estadoCivil} ";
    }
     public function cuidar (){
        return "Eu estou cuidando da minha familia.";

     }
}

class Crianaca extends Pessoa {
    private $escola;

    public function __construct($idade, $escola){
        parent ::__construct($idade);
        $this->escola = $escola;

    }
    public function getEscola(){
        return $this->escola;
    }
    public function setEscola($escola){
        $this->escola = $escola;
    }
    public function apresentar (){
        return "Sou uma criança de {$this->idade} anos. Estudo na {$this->escola}" ;
    }
    public function brincar (){
        return "Estou brincando de pega pega na escola";
    }
}
class Vovo extends Pessoa {
    private $netos;
    public function __construct($idade, $netos){
        parent:: __construct($idade);
        $this->netos = $netos;
    }
    public function getNetos(){
        return $this->netos;
    }
    public function setNetos($netos){
        $this->netos=$netos;
    }
    public function apresentar(){
        return "Sou uma vovó de {$this->idade} anos. Tenho {$this->netos} netos";
    }
    public function Vida(){
        return "Contando sobre acontecimentos para {$this->netos} netos";
    }
}
$homemAdulto = new HomemAdulto(32, 'Engenheiro de Sistemas');
echo $homemAdulto->apresentar(). "" . $homemAdulto->trabalhar(). "\n";

$mulherAdulta = new MulherAdulta(30, 'Casada');
echo $mulherAdulta->apresentar() . "" . $mulherAdulta->cuidar( ). "\n";

$crianca = new Crianca(5, 'Escola Maria Mourici');
echo $crianaca->apresentar() . "" . $crianca->brincar() . "\n";

$vovo = new Vovo(70, 5);
echo $vovo->apresentar(). "" . $vovo->Vida(). "\n";
?>

/* Aprimorando o conceito sobre Programação Orientada a Objetos.
Procurei utilizar um conceito simples para práticar usando conceitos simples como caracteristicas de uma pessoa,criei uma classe HomemAdulto a uma extensão de Pessoa,
com um atributo de profissão assim procurei aprimorar um pouco sobre os conceitos de getters e setters dentro do atributo
 e criei um método de apresentar e inclir informações sobre profissão, 
ao mesmo tempo pensei em criar 
informações sobre mais caracteristicas de um homem mmais procurei não aprofundar
tanto e no mesmo criei classes de uma MulherAdulta, de uma Criança e de uma Vovó, liguei todas essa classes filhas dentro da classe pai e chamei elas dentro dos métodos que atribui.




