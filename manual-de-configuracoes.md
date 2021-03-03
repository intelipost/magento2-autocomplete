# Manual de Uso: Módulo Autocomplete Intelipost

[![logo](https://image.prntscr.com/image/E8AfiBL7RQKKVychm7Aubw.png)](http://www.intelipost.com.br)

## Introdução

O módulo Autocomplete Intelipost é responsável por completar os dados de endereço partindo do CEP fornecido pelo cliente final.
A consulta do CEP é feita na [API Intelipost](https://docs.intelipost.com.br/v1/cep/autocomplete).

Com a instalação do módulo, essa funcionalidade estará disponível em 3 páginas:

- Checkout (.../checkout/index/index),
- Página de criação de cadastro de cliente (.../customer/account/create),
- Página de atualização/criação de novo endereço (.../customer/address/form).

Este manual foi divido em duas partes:

  - **Configurações**: Onde você encontrará o caminho para realizar as configurações e explicações de cada uma delas.
  - **Uso**: Onde você encontrará a maneira de utilização de cada uma das funcionalidades.

## Configurações
Para acessar o menu de configurações, basta seguir os seguintes passos:

No menu à esquerda, acessar **Stores** -> **Configuration** -> **Intelipost** -> **Auto Complete**:

![ac1](https://s3.amazonaws.com/email-assets.intelipost.net/integracoes/ac2.gif)


### Configurações Básicas
Nesta primeira etapa, a única configuração a ser feita é **Tempo de Carregamento da Página** (Load Page Time) em milisegundos.
Ela indica a quantidade de tempo que deve ser esperado antes de carregar o script de autocomplete na página.
O padrão é de 3000 ms.

### Checkout - Customização por "name" dos campos
Nesta seção você deverá configurar os "names" dos campos do front-end que deverão receber cada uma das seguintes informações:

- State: Estado
- City: Cidade
- Street: Rua
- Quarter: Bairro
- Additional Information: Informações Adicionais

Caso o cliente não faça uso de alguns desses campos para serem completados, basta deixá-los em branco.
Caracteres especiais podem ser escapados utilizando duas barras invertidas "\\\\". 
Por exemplo: Se o campo Bairro for o quarto item do array **street[]**, deve ser configurado da seguinte maneira: street\\\\[3\\\\].

### Editar Endereço do Consumidor - Customização por "id"
As configurações de Criar e Editar Endereço são bem semelhantes ao Checkout. A grande diferença é o parâmetro usado para identificar o campo no front-end. Enquanto no Checkout é o **"name"**, nas páginas de editar o endereço é o **"id"** do campo.

- State: Estado
- City: Cidade
- Street: Rua
- Quarter: Bairro
- Additional Information: Informações Adicionais

Caso o cliente não faça uso de alguns desses campos para serem completados, basta deixá-los em branco.

### Criar Endereço do Consumidor - Customização por "id"
Assim como nas configurações para editar o endereço, as configurações de criar endereõ também são customizadas a partir do **"id"** do campo no front-end.

- State: Estado
- City: Cidade
- Street: Rua
- Quarter: Bairro
- Additional Information: Informações Adicionais

Caso o cliente não faça uso de alguns desses campos para serem completados, basta deixá-los em branco.

## Uso

O uso do módulo é bem simples. Uma vez instalado e configurado, basta ir até a página de checkout (ou de criação/edição de cadastro) e preencher um CEP. Assim que o foco for tirado do campo CEP, os campos serão preenchidos automaticamente no formulário (rua, bairro, cidade, estado e informações adicionais).

![ac1](https://s3.amazonaws.com/email-assets.intelipost.net/integracoes/ac3.gif)