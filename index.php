<?php 

$routes = require __DIR__ . '/config/routes.php';

$page = $_GET['page'] ?? 'home';

if (!array_key_exists($page, $routes)) {
  $page = 'home';
}

$currentPageFile = $routes[$page];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Manual - Grupo Fetz</title>
</head>
<body>
  <div class="app">
    <header class="top-bar">
      <div class="top-left">
        <a href="index.php?page=home">Construtora Fetz</a>
      </div>
    </header>

    <div class="layout">

      <aside class="side-menu">
        <div class="side-header">Módulos</div>

        <ul class="side-list">

          <!-- ================= RH ================= -->
          <li class="side-item">
            <div class="side-item-icon">👤</div>
            <div class="side-item-label">RH</div>
            <div class="side-item-arrow">▶</div>

            <div class="submenu-panel">
              <div class="submenu-title">Recursos Humanos</div>
              <ul class="submenu-list">
                <!-- Automação de Ponto -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">⏱</div>
                  <a href="index.php?page=rh/rh-ponto">Automação de Ponto</a>
                  <span class="submenu-arrow">▶</span>

                  <!-- 3 submenus de Automação de Ponto -->
                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Automação de Ponto</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="index.php?page=rh/rh-ponto-permissoes">Perfis e Permissões</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Batida Manual</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Relatórios de Ponto</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Folha de Pagamento -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">💰</div>
                  <a href="index.php?page=rh/rh-folha">Folha de Pagamento</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Folha de Pagamento</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Cadastro de Eventos</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Processamento da Folha</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Relatórios da Folha</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Gestão de Pessoas -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">👥</div>
                  <a href="index.php?page=rh/rh-pessoas">Gestão de Pessoas</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Gestão de Pessoas</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Cadastro de Colaboradores</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Movimentações</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Avaliações / Registros</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Segurança e Saúde Ocupacional -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">⚕️</div>
                  <a href="index.php?page=rh/rh-sso">Segurança e Saúde Ocupacional</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Segurança e Saúde Ocupacional</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">ASO e Exames</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">EPI / EPC</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Treinamentos / NR</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <!-- ================= BACKOFFICE ================= -->
          <li class="side-item">
            <div class="side-item-icon">📂</div>
            <div class="side-item-label">BackOffice</div>
            <div class="side-item-arrow">▶</div>

            <div class="submenu-panel">
              <div class="submenu-title">BackOffice</div>
              <ul class="submenu-list">
                <!-- Gestão Contábil -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">📘</div>
                  <a href="index.php?page=bo/bo-contabil">Gestão Contábil</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Gestão Contábil</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Plano de Contas</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Lançamentos Contábeis</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Balancetes / Demonstrativos</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Gestão de Estoque, Compras e Faturamento -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">📦</div>
                  <a href="index.php?page=bo/bo-estoque">Gestão de Estoque, Compras e Faturamento</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Estoque / Compras / Faturamento</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Cadastro de Produtos</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Pedidos de Compra</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Notas Fiscais / Faturamento</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Gestão Financeira -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">💳</div>
                  <a href="index.php?page=bo/bo-financeira">Gestão Financeira</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Gestão Financeira</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Contas a Pagar</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Contas a Receber</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Fluxo de Caixa</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Gestão Fiscal -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">📑</div>
                  <a href="index.php?page=bo/bo-fiscal">Gestão Fiscal</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Gestão Fiscal</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Impostos / Tributos</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Obrigações Acessórias</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Apurações / Fechamento</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!-- Gestão Patrimonial -->
                <li class="submenu-item has-sub">
                  <div class="submenu-icon">🏢</div>
                  <a href="index.php?page=bo/bo-patrimonial">Gestão Patrimonial</a>
                  <span class="submenu-arrow">▶</span>

                  <div class="submenu-panel submenu-level2">
                    <div class="submenu-title">Gestão Patrimonial</div>
                    <ul class="submenu-list">
                      <li class="submenu-item">
                        <a href="#">Cadastro de Bens</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Depreciação</a>
                      </li>
                      <li class="submenu-item">
                        <a href="#">Movimentações de Bens</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <div class="side-footer">
        </div>
      </aside>
      <main class="content">
        <?php include $currentPageFile; ?>
      </main>
    </div>
  </div>
</body>
</html>
