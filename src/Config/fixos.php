<?php

define('PATH_URL', $_SERVER["DOCUMENT_ROOT"] . '/app_gestao/src/');
define('PATH_URL_SERVER', $_SERVER["DOCUMENT_ROOT"] . '/api_gestao/src/');


const SITUACAO_EM_ABERTO      = 1;
const SITUACAO_EM_ATENDIMENTO = 2;
const SITUACAO_ENCERRADO      = 3;
const SITUACAO_TODOS          = 4;

const SECRET_JWT_FUNC = 'tokenFunc';

const NAO_AUTORIZADO = -1000;
