<?php

function setpassword($plaintext){
    $passcode = $plaintext;
    echo $passcode;
}

setpassword("password123");


function setpassworddef($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_DEFAULT); // dyn code
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);
};

setpassworddef("password123"); // Befor Encrypt = password123 , After Encrypt = $2y$10$jYq5PjedAb.pW1IhpkPj6ey7At/QcoG/YH0Fb1rG6cUd6N2p9L4ge 60


function setpasswordbcr($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_BCRYPT); // dyn code
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);
};

setpasswordbcr("password123");

function passworddecry(){

    $plaintextone = "password123";
    $encodeone = password_hash($planintextone,PASSWORD_DEFAULT);

    $plaintexttwo = "password123";
    $encodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);

    // echo "Encrypt Code One = {$encodeone}";
    // echo "Encrypt Code Two = {$encodetwo}";

    $verify = password_verify($plaintextone,$encodetwo);

    if($verify){
        echo "oki";
    }else{
        echo "failed";
    };

}


passworddecry(); //okai





function passwordmd5($plaintext){

    // Message-Digest = md5(string,binary);
    // Note::binary = TRUE/true     FALSE/false;
    // TRUE/true = RAW 16 characters binary format;
    // FALSE/false = DEFAULT 32 characters hax number;

    $passcode1 = md5($plaintext); // static
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode1}";
    echo strlen($passcode);//32

    $passcode2 = md5($plaintext,FALSE); //static
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode2}";//After Encrypt = 482c811da5d5b4bc6d497ffa98491e38
    echo strlen($passcode2);//32

    $passcode3 = md5($plaintext,TRUE); //dynamite
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode3}";//Befor Encrypt = password123 , After Encrypt = H,��մ�mI��I8
    echo strlen($passcode3);//16


};

$passwordmd5("password123");


function passwordmd5verify($planintext){

    $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

    if($getpassword === md5($plaintext)){
        echo "Password match with 32 chars hax number";
    }elseif($getpassword === md5($plaintext,TRUE)){
        echo "Password match with 16 chars binary format";//can't match cuz it's a binary
    }else{
        echo "Password do not match";
    }

};

passwordmd5verify("password123");



function passwordsha1($plaintext){

    // Secure Hash Alogrithm = sha1(string,binary);
    // Note::binary = TRUE/true     FALSE/false;
    // TRUE/true = RAW 20 characters binary format;
    // FALSE/false = DEFAULT 40 characters hax number;

    $passcode1 = sha1($plaintext); // static
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode1}";//After Encrypt = cbfdac6008f9cab4083784cbd1874f76618d2a97
    echo strlen($passcode);//40

    $passcode2 = sha1($plaintext,FALSE); //static
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode2}";//After Encrypt = cbfdac6008f9cab4083784cbd1874f76618d2a97
    echo strlen($passcode2);//40

    $passcode3 = sha1($plaintext,TRUE); //dynamite
    echo "Befor Encrypt = {$plaintext} , After Encrypt = {$passcode3}";//Befor Encrypt = password123 , After Encrypt = //`ʴ7чOva*
    echo strlen($passcode3);//20


};

passwordsha1("password123");


function passwordsha1verify($planintext){

    $getpassword = "cbfdac6008f9cab4083784cbd1874f76618d2a97";

    if($getpassword === sha1($plaintext)){
        echo "Password match with 32 chars hax number";
    // }else($getpassword === sha1($plaintext,TRUE)){
    //     echo "Password match with 16 chars binary format";//can't match cuz it's a binary}
    }else{
        echo "Password do not match";
    }

}

passwordmd5verify("password123");


function passwordcrypt($plaintext){
    //=> crypt(string,key)

    $cryptkey = "456789ABCDEFG";
    $passcode = crypt($plaintext,$cryptkey);//static code
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode}";//Before Encrypt = password123 , After Encrypt = 45X0h1uT9HvTw
    echo strlen($passcode);//13
};

passwordcrypt("password123");


function passwordcryptverify($plaintext){
    $getpassword = "45X0h1uT9HvTw";
    $cryptkey = "456789ABCDEFG";

    if($getpassword === crypt($plaintext,$cryptkey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    };
};

passwordcryptverify("password123");




function strongpassword($plaintext){

    $cryptkey = "456789ABCDEFG";
    $newpassword = crypt(sha1(md5($plaintext)),$cryptkey);//static Before Encrypt = password123 , After Encrypt = 45QUhSRh116Mw

    // $newpassword = md5($plaintext);
    // $newpassword = sha1($newpassword);
    // $newpassword = crypt($newpassword,$newpassword);// static Before Encrypt = password123 , After Encrypt = 926wQBSqLwkTE

    echo "Before Encrypt = {$plaintext} , After Encrypt = {$newpassword}";
    echo strlen($newpassword);//13
};

passwordcrypt("password123");



function strongpasswordverify($plaintext){
    $getpassword = "45QUhSRh116Mw";
    $cryptkey = "456789ABCDEFG";

    if($getpassword === crypt(sha1(md5($plaintext)),$cryptkey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    };

    // $getpassword = "926wQBSqLwkTE";
    // if($getpassword === crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
    //     echo "Password match";
    // }else{
    //     echo "Password do not match";
    // };

};

strongpasswordverify("password123")



?>


<!-- 

    password_hash(string,PASSWORD_BCRYPT or PASSWORD_DEFAULT);
    md5(string,true/false)

-->