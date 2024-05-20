<?php 
/////////////////////////////////////////
//Configuração da API do pix
/////////////////////////////////////////
function conf_efi(){
    // false = Production | true = Homologation
    $sandbox = false;

    // Credentials of Production
    $clientIdProd = "Client_Id_cd2ce12207ce6722e4fdd38c724804de5cd3f298";
    $clientSecretProd = "Client_Secret_b5d5ff64f48aead21ced404563d703ecad1dec22";
    $pathCertificateProd = realpath(__DIR__ . "/producao.p12"); // Absolute path to the certificate in .pem or .p12 format

    // Credentials of Homologation
    $clientIdHomolog = "Client_Id_75fc36648f6436abf2455eca4b8f90bac4defdc5";
    $clientSecretHomolog = "Client_Secret_f8da87deb0dfd23b967c1c39e0e196a288f6cae0";
    $pathCertificateHomolog =  realpath(__DIR__ . "/arquivoCertificado.p12"); // Absolute path to the certificate in .pem or .p12 format

    $options = [
        "clientId" => ($sandbox) ? $clientIdHomolog : $clientIdProd,
        "clientSecret" => ($sandbox) ? $clientSecretHomolog : $clientSecretProd,
        "certificate" => ($sandbox) ? $pathCertificateHomolog : $pathCertificateProd,
        "pwdCertificate" => "", // Optional | Default = ""
        "sandbox" => $sandbox, // Optional | Default = false
        "debug" => false, // Optional | Default = false
        "timeout" => 3000000000, // Optional | Default = 30
    ];

    return $options;
}
