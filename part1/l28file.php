<?php

// => READ

echo readfile("l28file.txt");
echo "<br/>";
echo filesize("./l28file.txt");

echo "<hr/>";

$fileopen = fopen("l28file.txt","r"); // fopen(filepath,action)

if($fileopen){
    echo "File Exists";
    echo "<br/>";

    $filesize = filesize("l28file.txt");
    $fileread = fread($fileopen,$filesize);  // fread(fileopen,filesize)
                fclose($fileopen);

    echo $fileread;
}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";


// => Write

// For Linux (if permission needed)
// sudo chmod 777 -R /var/www/html
// sudo chmod 775 -R /var/www/html

$fileopen = fopen("l28files.txt","w");

if($fileopen){
    echo "File Exists";
    echo "<br/>";

    // fwrite($fileopen,"Hello guys !!! I created new file");
    fwrite($fileopen,"Hello guys !!! are you ready to learn file system in php"); //overwrite

    $fileopen = fopen("l28files.txt","r");
    $fileread = fread($fileopen,filesize("l28files.txt"));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";



//=> Execute

//Note :: "x" create file only,return FALSE IF file already exists;
$fileopen = fopen("l28newfiles.txt","x");

if($fileopen){
    echo "File Exists";
    echo "<br/>";
}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";


//=> Create

//Note :: "c" create file only;
//Note :: "c+" create file and can read;
$fileopen = fopen("l28yourfiles.txt","c");

if($fileopen){
    echo "File Exists";
    echo "<br/>";

    fwrite($fileopen,"Hello guys !!! I created new file");
    // fwrite($fileopen,"Hello guys !!! are you ready to learn file system in php"); //overwrite

    $fileopen = fopen("l28yourfiles.txt","r");
    $fileread = fread($fileopen,filesize("l28yourfiles.txt"));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";



$fileopen = fopen("l28ourfiles.txt","w");

if($fileopen){
    echo "File Exists";
    echo "<br/>";

    $message = "Welcome to our class. \n";
    fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    fwrite($fileopen,$message);

    $fileopen = fopen("l28ourfiles.txt","r");
    $fileread = fread($fileopen,filesize("l28files.txt"));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";



//=> Append

$fileopen = fopen("l28theirfiles.txt","a");

if($fileopen){
    echo "File Exists";
    echo "<br/>";

    // fwrite($fileopen,"Hello \n");
    // fwrite($fileopen,"Worls");

    $message = "Welcome to our class. \n";
    fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    fwrite($fileopen,$message);

    $fileopen = fopen("l28theirfiles.txt","r");
    $fileread = fread($fileopen,filesize("l28theirfiles.txt"));
    fclose($fileopen);

    echo $fileread;

}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";
// ----------------------------------------------------------------------------------

// => Other File's Useful Functions

// file_get_contents()  = Read
// file_put_contents(file,string)  = Write
// file_exists()        = check file exists or not
// copy()               = copies a file
// rename()             = rename a file
// unlink(main)             = delete a file

echo file_get_contents("l28file.txt");

//sudo chmod 777 -R phpbatch4
//sudo chmod 77 -R l28softfile.txt

echo "<hr/>";

$existingfile = "l28file.txt";
$namefile = "l28softfile.txt";
$message = file_get_contents($existingfile);
$message .= "\n Thanks for using php file system \n";

file_put_contents($namefile,$message) or die("Unable to open file");

$existingfile = "l28file.txt";
$namefile = "l28headfile.txt";

if(file_exists($existingfile)){
    echo "File Exists";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using php file system \n";
    file_put_contents($namefile,$message) or die("Unable to open file");
}else{
    echo "File Not Found";
}

echo "<hr/>";

$existingfile = "l28file.txt";
$namefile = "l28main.txt";

if(is_file($existingfile)){
    echo "File Exists";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using php file system \n";
    file_put_contents($namefile,$message) or die("Unable to open file");
}else{
    echo "File Not Found";
}

echo "<hr/>";


//=> copy(main,copy)

$existingfile = "l28file.txt";
copy($existingfile,"l28subfile.txt");
echo file_get_contents("l28subfile.txt");

echo "<hr/>";



//=> rename(main,newfilename)

$existingfile = "l28file.txt";
rename($existingfile,"l28webfile.txt");
echo file_get_contents("l28wbfile.txt");

echo "<hr/>";



//=> unlink(main)

$existingfile = "l28webfile.txt";

if(file_exists($existingfile)){
    unlink($existingfile);
    echo "File Delete Successfully";
}else{
    echo "File Not Found";
}

echo "<hr/>";


// Show all .txt files
echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

echo "<hr/>";

// Show all files
echo "<pre>".print_r(glob("*.*"),true)."</pre>";

echo "<hr/>";

?>