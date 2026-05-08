# CrackHub

## Sobre o Projeto

CrackHub é uma plataforma web segura que direciona usuários para sites confiáveis de downloads de software crack. O projeto oferece uma interface intuitiva e segura para facilitar o acesso a recursos de software de forma centralizada.

## Características

- 🔐 **Segurança**: Verificação rigorosa de links para garantir segurança dos usuários
- 👤 **Autenticação**: Sistema de login e registro de usuários
- 📊 **Dashboard**: Painel personalizado para cada usuário
- 🗄️ **Banco de Dados**: MySQL para armazenamento confiável de dados
- 🐳 **Docker**: Containerização para fácil deploy
- 🛡️ **Controle de Acesso**: Apenas moderadores e admins podem adicionar novos jogos

## Requisitos

- PHP 7.4+
- MySQL 5.7+
- Composer
- Docker (opcional)
- Node.js (para gerenciamento de assets, opcional)

## Instalação Local

### 1. Clone o repositório
```bash
git clone CrackHub
```

### 2. Instale as dependências PHP

Use o Composer para instalar todas as dependências do projeto:

```bash
composer install
```

Isso instalará todas as dependências listadas no composer.json, incluindo:
- vlucas/phpdotenv - Para gerenciar variáveis de ambiente
- symfony/polyfill - Para compatibilidade entre versões PHP
- phpoption - Para tratamento de valores opcionais

### 3. Configure o ambiente

Copie o arquivo .env e configure suas variáveis:

```bash
cp .env.example .env  # Se houver arquivo de exemplo
```

Edite o .env com suas configurações:

```
DB_CONNECTION=mysql
DB_DATABASE=exemple
DB_ROOT=root
DB_PASSWORD=sua_senha_aqui
DB_HOST=localhost
```

### 4. Crie o banco de dados

```bash
mysql -u root -p -e "CREATE DATABASE crackhub;"
mysql -u root -p crackhub < sql/database.sql
```

### 5. Inicie o servidor local

```bash
php -S localhost:8000
```

Acesse `http://localhost:8000` no seu navegador.

## Usar com Docker

Para facilitar o deploy e garantir consistência, use Docker:

```bash
docker-compose up --build
```

O projeto estará disponível em `http://localhost:8000`

## Fazendo Deploy Online

### Opção 1: Hosting Compartilhado

1. Faça upload dos arquivos via FTP/SFTP
2. Configure o banco de dados no painel do hosting
3. Importe o SQL: database.sql
4. Ajuste as variáveis no .env (credenciais do servidor remoto)

### Opção 2: VPS/Servidor Dedicado

```bash
# No servidor
git clone <seu-repositorio>
cd CrackHub
composer install
# Configure .env com as credenciais do servidor
mysql -u root -p crackhub < sql/database.sql
php -S 0.0.0.0:8000
```

### Opção 3: Docker em Produção

```bash
docker-compose -f docker-compose.yml up -d
```

Configure um nginx/Apache como reverse proxy.

### Opção 4: Plataformas Cloud

- **Heroku**: Use `Procfile` e composer.json
- **AWS**: EC2 + RDS para banco de dados
- **DigitalOcean**: App Platform ou Droplets
- **Railway/Render**: Deploy direto do GitHub

## Segurança e Controle de Acesso

### Sistema de Permissões

O CrackHub implementa um rigoroso controle de acesso para proteção do catálogo:

#### Níveis de Usuário

- **Usuário Comum**: Apenas visualização dos jogos disponibilizados
- **Administrador**: Pode adicionar, editar e remover jogos do catálogo

#### Adicionar Novos Jogos (Apenas Moderadores/Admins)

Apenas usuários com permissão de **Administrador** podem:

- ✅ Adicionar novos jogos ao catálogo
- ✅ Editar informações de jogos
- ✅ Remover jogos do catálogo
- ✅ Aprovar/rejeitar sugestões de usuários
- ✅ Validar links de segurança

#### Fluxo de Submissão

1. Usuários comuns podem **sugerir** novos jogos
3. Moderadores **validam** os links para segurança
4. Após aprovação, o jogo é **publicado** no catálogo

### Medidas de Segurança Implementadas

- 🔒 **Verificação de Permissões**: Validação em todos os endpoints de modificação
- 🛡️ **Validação de Links**: Verificação se links são seguros antes de publicação
- 📝 **Auditoria**: Registro de todas as adições/modificações de jogos
- 🔐 **Autenticação**: Sessões seguras e proteção contra CSRF
- ✔️ **Sanitização**: Limpeza de inputs para prevenir injeção SQL e XSS

### Configurar Moderadores

No banco de dados, altere o role do usuário:

```sql
UPDATE users SET role = 'admin' WHERE id = user_id;
```

## Estrutura do Projeto

```
src/
├── assets/                # Imagens e recursos estáticos
├── config/
│   ├── authcheck.php      # Validação de autenticação
│   └── data.php           # Funções/dados de suporte
├── controller/
│   ├── RegisterController.php
│   ├── logincontroller.php
│   └── logoutcontroller.php
└── views/
    ├── dashboard.php
    ├── login.php
    ├── logout.php
    └── register.php
```

## Funcionalidades Principais

- **Login/Registro**: Autenticação segura de usuários
- **Dashboard**: Visualização de jogos disponíveis
- **Catálogo**: Listagem de jogos com links seguros
- **Controle Moderado**: Apenas admins/mods podem gerenciar o catálogo
- **Validação de Segurança**: Verificação de links antes da publicação

## Contribuindo

Para contribuir com novos jogos ou sugestões, siga o processo de submissão e aguarde aprovação dos moderadores.

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo LICENSE para detalhes.

## Suporte

Para suporte ou reportar problemas, abra uma issue no repositório.
```