<?php 

class Config {
    //INFORMAÇÕES BÁSICAS DO SITE
    const SITE_URL = 'http://localhost';
    const SITE_PASTA = 'photomanager';
    const SITE_NOME = 'Loja de fotografia';
    const SITE_EMAIL_ADMIN = 'lojafoto@gmail.com';
    //http://localhost/photomanager/clientes/1


    //INFORMAÇÕES DO BANCO DE DADOS

    const DB_HOST = 'localhost',
          DB_USER = 'ROOT',
          DB_PASS = '',
          DB_BANCO = 'lojafoto';

    //INFORMAÇÕES PHPMAILLER
    const EMAIL_HOST = 'smtp.gmail.com';
    const EMAIL_USER = 'plinioglad@gmail.com';      
    const EMAIL_NOME = 'Contato Loja Foto';
    const EMAIL_PASS = 'PAr@u106057@';
    const EMAIL_PORT = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = 'tls';
    const EMAIL_COPIA = 'plinioglad@gmail.com';


}
?>