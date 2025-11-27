# 📘 Manual de Procedimentos – Grupo Fetz

Sistema Web desenvolvido para organizar e disponibilizar procedimentos operacionais por módulo, de forma simples, rápida e estruturada.

Este projeto simula o modelo de portais internos corporativos (como sistemas ERP) e tem como foco facilitar a navegação entre áreas como **RH** e **BackOffice**, organizando manuais e instruções de forma escalável.

---

## 🧩 TECNOLOGIAS UTILIZADAS

- PHP (roteamento por parâmetro GET)
- HTML5
- CSS3
- Estrutura modular por pastas

---

## 📂 ESTRUTURA DO PROJETO

```bash
/
├── index.php
├── config/
│   └── routes.php
├── pages/
│   ├── home.php
│   ├── rh/
│   │   ├── rh-ponto.php
│   │   ├── rh-ponto-permissoes.php
│   │   ├── rh-folha.php
│   │   ├── rh-pessoas.php
│   │   └── rh-sso.php
│   └── bo/
│       ├── bo-contabil.php
│       ├── bo-estoque.php
│       ├── bo-financeira.php
│       ├── bo-fiscal.php
│       └── bo-patrimonial.php
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   └── rh-ponto.css
│   └── img/
│       ├── rh/
│       │   ├── ponto/
│       │   │   ├── ponto1.jpeg
│       │   │   ├── ponto2.jpeg
│       │   │   └── ponto3.jpeg
│       │   ├── folha/
│       │   ├── pessoas/
│       │   └── sso/
│       └── backoffice/
│           ├── contabil/
│           ├── estoque/
│           ├── financeira/
│           ├── fiscal/
│           └── patrimonial/
└── README.md

────────────────────────────────────────────────────────────

## FUNCIONAMENTO DAS ROTAS

A navegação é feita por parâmetro via URL.

Exemplo:
index.php?page=rh/rh-ponto

As rotas são controladas no arquivo:
config/routes.php

Esse arquivo mapeia:
rota → página correspondente

- organização
- manutenção simples
- expansão facilitada
- estrutura centralizada

────────────────────────────────────────────────────────────

## MÓDULOS IMPLEMENTADOS

RECURSOS HUMANOS (RH)

- Automação de Ponto
  - Perfis e Permissões
  - Batida Manual
  - Relatórios
- Folha de Pagamento
  - Cadastro de Eventos
  - Processamento
  - Relatórios
- Gestão de Pessoas
  - Cadastro de Colaboradores
  - Movimentações
  - Avaliações
- Segurança e Saúde Ocupacional
  - ASO e Exames
  - EPI / EPC
  - Treinamentos / NR

BACKOFFICE

- Gestão Contábil
  - Plano de Contas
  - Lançamentos
  - Demonstrativos
- Estoque / Compras / Faturamento
  - Cadastro de Produtos
  - Pedidos de Compra
  - Notas Fiscais
- Gestão Financeira
  - Contas a Pagar
  - Contas a Receber
  - Fluxo de Caixa
- Gestão Fiscal
  - Obrigações Acessórias
  - Apuração de Impostos
- Gestão Patrimonial
  - Cadastro de Bens
  - Depreciação
  - Movimentações

────────────────────────────────────────────────────────────

## OBJETIVO

Este sistema foi criado para:

- centralizar procedimentos internos
- facilitar treinamento de colaboradores
- padronizar processos
- evitar perda de conhecimento
- simular um sistema corporativo real
- servir como projeto de estudo e portfólio

────────────────────────────────────────────────────────────

## BOAS PRÁTICAS APLICADAS

- Separação por responsabilidades
- Organização por domínio
- CSS modular
- Layout reutilizável
- Navegação desacoplada
- Estrutura extensível
- Código direto e legível

────────────────────────────────────────────────────────────

## AUTOR

Heráclito Pantoja Junior

Projeto criado para estudo, validação técnica e portfólio profissional.

────────────────────────────────────────────────────────────
