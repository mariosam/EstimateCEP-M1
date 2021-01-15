********************************************************************************
*** ESTIMATE CEP MODULE - READ ME (english)
********************************************************************************

*** Objectives

The purpose of this module is to estimate the value of shipping a product by post
showing the values on the product page.
As it does not take into account the number of items, nor the other items in the
shopping cart, the displayed value is only an estimate (not the final value).

*** Version 1.0.0

What we have in this version:
- freight calculation box on the products page;
- consultation via webservice on the post office website;
- possibility of including free shipping in the calculation results;
- storing the zip code in a cookie for self-filling when changing products;
- hiding the calculation box if the product does not have physical delivery;
- possibility to customize box and results using CSS;
- possibility to inform contract with post office;
- possibility to configure shipping box dimensions;
- possibility to choose which shipping methods you want to consult at the post office;

*** Tested

Version: 1.9.3.9 Community Edition

PHP: 5.6.40

Theme: RWD

*** Install

Move the <EstimateCep> folder to the directory:
app/code/community/MarioSAM/ (create the directory if it doesn't exist)

Move the <mariosam_estimatecep.xml> file to the directory:
app/design/frontend/base/default/layout/

Move the <estimatecep> folder to the directory:
app/design/frontend/base/default/template/mariosam/ (create the directory if it doesn't exist)

Move the <MarioSAM_EstimateCep.xml> file to the directory:
app/etc/modules/

Move the pt_BR, en_US, etc. translation files/folders to:
app/locale/

After moving all files, you have to log out and log in to the backend again.

Access the Magento panel and navigate to:
System > Configuration > MARIO SAM > C.E.P. Estimate

********************************************************************************
*** MODULO ESTIMATE CEP - LEIA ME (portugues)
********************************************************************************

*** Objetivos

Objetivo deste modulo é estimar o valor de envio de um produto pelos correios
mostrando os valores na pagina do produto.
Por nao levar em consideracao a quantidade de itens, nem os demais itens no
carrinho de compras, o valor apresentado é apenas uma estimativa (e nao o valor final).

*** Versao 1.0.0 - https://mariosam.com.br/versao1/modulo-m1-estimatecep/

O que temos nesta versao:
- caixa de calculo de frete na pagina dos produtos;
- consulta via webservice no site dos correios;
- possibilidade de incluir frete gratis nos resultados de calculo;
- armazenamento do cep em cookie para auto-preenchimento ao trocar de produto;
- ocultamento do box de calculo se o produto nao possuir entrega fisica;
- possibilidade de customizar caixa de consulta e resultados usando CSS;
- possibilidade de informar contrato com correios;
- possibilidade de configurar dimensoes de caixa de envio;
- possibilidade de escolher quais metodos de envio deseja consultar nos correios;

*** Testado

Versao: 1.9.3.9 Community Edition

PHP: 5.6.40

Tema: RWD

*** Instalacao

Mova a pasta <EstimateCep> para o diretorio:
app/code/community/MarioSAM/ (crie o diretorio se nao existir)

Mova o arquivo <mariosam_estimatecep.xml> para o diretorio:
app/design/frontend/base/default/layout/

Mova a pasta <estimatecep> para o diretorio:
app/design/frontend/base/default/template/mariosam/ (crie o diretorio se nao existir)

Mova o arquivo <MarioSAM_EstimateCep.xml> para o diretorio:
app/etc/modules/

Mova os arquivos/pastas de traducao pt_BR, en_US, etc, para:
app/locale/

Depois de mover todos os arquivos, voce tem que deslogar e logar novamente no backend.

Acesse o painel do Magento e navegue em:
Sistema > Configuracao > MARIO SAM > C.E.P. Frete