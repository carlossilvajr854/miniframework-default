# 📦 MiniFramework MVC em PHP

Um projeto de um MiniFramework PHP que segue o padrão de arquitetura MVC (Model-View-Controller). Foi desenvolvido para ser uma base para a criação de novas aplicações web, contendo uma estrutura de rotas, controllers e views.

## 📝 Observação

Este projeto foi desenvolvido como parte de um curso para aprimorar meus conhecimentos em PHP, arquitetura de software e o padrão MVC. O código foi digitado por mim, com base nas aulas, e não é uma cópia direta.

## 🚀 Tecnologias Utilizadas

-   **PHP 7.4+:** Linguagem de programação principal.
-   **Arquitetura MVC:** Padrão de projeto para organização do código.
-   **Composer:** Gerenciador de dependências para o autoload.

## 🚀 Destaques de Engenharia:

-   **Front Controller Pattern:** Toda a aplicação converge para um único ponto de entrada (public/index.php), centralizando o gerenciamento de requisições.

-   **Autoloading com PSR-4:** Utilização do Composer para mapeamento automático de classes, eliminando a necessidade de múltiplos require manuais.

-   **Acoplamento Flexível:** Estrutura desenhada para que novos Modelos e Controladores sejam adicionados sem interferir no núcleo do framework.

## ⚙️ Como Rodar o Projeto

Este projeto foi projetado para ser executado em um ambiente com PHP. Você pode usar um servidor local como XAMPP, WAMP, ou o servidor embutido do PHP.

### Usando o servidor embutido do PHP:

1.  **Clone o repositório:**
    ```bash
    git clone <URL_DO_REPOSITORIO>
    ```
2.  **Navegue até o diretório do projeto:**
    ```bash
    cd miniframework-default
    ```
3.  **Instale as dependências do Composer (se houver):**
    ```bash
    php composer.phar install
    ```
    ou
    ```bash
    composer install
    ```
4.  **Inicie o servidor a partir da pasta `public`:**
    ```bash
    cd public
    php -S localhost:8000
    ```
5.  **Acesse a aplicação em seu navegador: `http://localhost:8000`**

## 📂 Estrutura do Projeto

```text
miniframework-default/
├── App/
│   ├── Controllers/     # Controladores da aplicação
│   ├── Models/          # Modelos de dados
│   └── Views/           # Arquivos de visualização
├── public/
│   └── index.php        # Ponto de entrada da aplicação (Front Controller)
├── vendor/
│   └── MF/              # Arquivos do núcleo do framework
├── composer.json
└── README.md
```

## 📄 Licença

Este projeto está sob a licença MIT. Consulte o arquivo [LICENSE](LICENSE) para obter mais detalhes.