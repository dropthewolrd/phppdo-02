<?php

class Conexao
{
    public static function pegarConexao()
    {
        $conexao = new PDO(DB_DRIVE.':host='.DB_HOSTNAME.';dbname='.DB_DATABASE,DB_USERNAME,DB_PASSWORD,_OPTIONS);
        //$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $conexao;
    }
}