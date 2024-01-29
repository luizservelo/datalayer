# Data Layer @Wallygator
## Forked from @Coffeecode/Datalayer

###### The data layer is a persistent abstraction component of your database that PDO has prepared instructions for performing common routines such as registering, reading, editing, and removing data.

O data layer é um componente para abstração de persistência no seu banco de dados que usa PDO com prepared statements para executar rotinas comuns como cadastrar, ler, editar e remover dados.

## About CoffeeCode

###### CoffeeCode is a set of small and optimized PHP components for common tasks. Held by Robson V. Leite and the UpInside team. With them you perform routine tasks with fewer lines, writing less and doing much more.

CoffeeCode é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Robson V. Leite e a equipe UpInside. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

### Highlights

- Easy to set up (Fácil de configurar)
- Total CRUD asbtration (Asbtração total do CRUD)
- Create safe models (Crie de modelos seguros)
- Composer ready (Pronto para o composer)
- PSR-2 compliant (Compatível com PSR-2)

## Installation

Data Layer is available via Composer:

```bash
"coffeecode/datalayer": "1.1.*"
```

or run

```bash
composer require coffeecode/datalayer
```

## Documentation

###### For details on how to use the Data Layer, see the sample folder with details in the component directory

Para mais detalhes sobre como usar o Data Layer, veja a pasta de exemplo com detalhes no diretório do componente

#### connection

###### To begin using the Data Layer, you need to connect to the database (MariaDB / MySql). For more connections [PDO connections manual on PHP.net](https://www.php.net/manual/pt_BR/pdo.drivers.php)

Para começar a usar o Data Layer precisamos de uma conexão com o seu banco de dados. Para ver as conexões possíveis acesse o [manual de conexões do PDO em PHP.net](https://www.php.net/manual/pt_BR/pdo.drivers.php)

```php
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "datalayer_example",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
```

#### your model

###### The Data Layer is based on an MVC structure with the Layer Super Type and Active Record design patterns. Soon to consume it is necessary to create the model of your table and inherit the Data Layer.

O Data Layer é baseado em uma estrutura MVC com os padrões de projeto Layer Super Type e Active Record. Logo para consumir é necessário criar o modelo de sua tabela e herdar o Data Layer.

```php
class User extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("users", ["first_name", "last_name"]);
    }
}
```

