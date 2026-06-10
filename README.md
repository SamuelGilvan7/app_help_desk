# 🛠️ App Help Desk - Sistema de Abertura e Consulta de Chamados

> 🎓 **Projeto de Fins Didáticos e Estudos** > Este sistema foi desenvolvido estritamente com o propósito acadêmico de aplicar e consolidar conceitos fundamentais de desenvolvimento web, lógica de programação e arquitetura de software. 
> 
> A aplicação foi construída utilizando tecnologias nativas, **sem o uso de frameworks ou bancos de dados relacionais (como MySQL)**, priorizando a manipulação direta de fluxos de dados e lógica puramente estruturada no servidor.

---

## 🧰 Tecnologias Utilizadas

* **HTML5:** Estruturação semântica das interfaces e formulários.
* **CSS3:** Estilização, layout e responsividade visual das páginas de acesso.
* **PHP:** Inteligência de backend, gerenciamento de sessões seguras e manipulação de arquivos físicos de dados.

---

## 📝 1. Engenharia de Requisitos

### 🔹 Requisitos Funcionais (RF)
* **RF-01: Autenticação de Usuário (Login):** O sistema deve permitir o login de utilizadores validando as suas credenciais através de uma matriz de dados interna no PHP, identificando se o perfil é **Administrador** ou **Cliente**.
* **RF-02: Abrir Chamado:** O utilizador com perfil *Cliente* deve conseguir abrir um chamado informando obrigatoriamente: Título, Categoria (PC, Hardware, Redes, Software) e a Descrição do problema.
* **RF-03: Consultar Chamados (Cliente):** O cliente deve conseguir visualizar o histórico dos seus próprios chamados através da leitura dinâmica do arquivo de texto e enviar réplicas.
* **RF-04: Responder Chamado (Administrador):** O utilizador com perfil *Administrador* deve conseguir ler todos os chamados salvos no arquivo e anexar respostas técnicas para o cliente.
* **RF-05: Controle de Visualização Privada:** O sistema deve aplicar um filtro lógico via PHP no momento da leitura do arquivo, garantindo que um cliente comum só veja as linhas de chamados que pertencem ao seu ID.
* **RF-06: Encerramento Restrito:** O sistema deve permitir que **apenas** utilizadores com o perfil de *Administrador* possam alterar o status de um chamado para "Encerrado".

### 🔸 Requisitos Não-Funcionais (RNF)
* **RNF-01: Compatibilidade de Navegadores:** A interface do utilizador deve ser baseada em HTML/CSS responsivo, compatível com Google Chrome, Mozilla Firefox, Microsoft Edge e Safari.
* **RNF-02: Armazenamento Seguro:** As senhas dos utilizadores simulados no backend PHP devem utilizar algoritmos de criptografia (como `password_hash()`) para validação interna.

---

## 📁 3. Arquitetura e Organização de Diretórios Ideal

O projeto utiliza uma estrutura modular limpa, dividindo as telas da lógica de backend e do arquivo físico de armazenamento:

```text
APP_HELP_DESK/
│
├── assets/                  # Arquivos estáticos públicos do front-end (CSS, Imagens)
│   ├── css/
│   │   └── style.css
│   └── img/
│       └── logo.png
│
├── controllers/             # Backend: Lógica de negócio e processamento de chamados
│   └── chamadoController.php# Scripts PHP para manipulação de arquivos (leitura/escrita)
│
├── database/                # Persistência de Dados (Simulação de Base de Dados)
│   └── arquivo.hd           # Arquivo físico de texto onde os dados são gravados
│
├── includes/                # Módulos PHP reutilizáveis e segurança estrutural
│   ├── auth.php             # Script de barreira (Impede acesso direto via URL)
│   ├── conexao.php          # Configuração/ponte para localização do arquivo físico
│   ├── config.php           # Constantes e configurações globais
│   ├── logoff.php           # Destruição segura de sessões do PHP
│   └── session.php          # Inicializador de sessão e níveis de perfil
│
├── views/                   # Front-end: Interfaces apresentadas ao utilizador
│   ├── abrir_chamado.php    # Formulário para criação de novos chamados
│   └── consultar_chamado.php# Grid e exibição de linhas filtradas do arquivo
│
├── home.php                 # Painel principal do sistema após autenticação bem-sucedida
└── index.php                # Tela de Login (Ponto de entrada obrigatório da aplicação)
