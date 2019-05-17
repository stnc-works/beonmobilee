<?php

function CategoryControl($value)
{

    switch ($value) {
        case 'Mobile Phone Case';
            $data = '26,34';
            break;

        case 'Case';
            $data = '26,34';
            break;

        case 'Mobile Phone Glass Protection';
            $data = '26,33';
            break;

        case 'Mobile Phone Cable';
            $data = '24,27';
            break;

        case 'Charger';
            $data = '24,30';
            break;

        case 'Hub';
            $data = '25,36';
            break;

            case 'Cable';
            $data = '35,37';
            break;

        case 'Universal Mobile Phone Charger QC 3.0';
            $data = '24,30';
            break;


        case 'Wireless Charger';
            $data = '24,30';
            break;

        case 'Charger';
            $data = '24,30';
            break;

        case 'Screen Protector';
            $data = '26,33';
            break;

        case 'Apple Mac Adapter';
            $data = '24,28';
            break;

        case 'Adapter';
            $data = '24,28';
            break;


        case 'Powerbank';
            $data = '25,31';
            break;

        default:
            $data = '2';
    }

    return explode(",", $data);
}


function ManufacturerControl($value)
{
    switch ($value) {
        case 'RVIXE Technical Co.,Ltd';
            $data = 14;
            break;

        case 'Soonleader Electronics CO., LTD';
            $data = 16;
            break;

        case 'Apphone';
            $data = 15;
            break;

        case 'Samsung';
            $data = 50;
            break;

        case 'Apple';
            $data = 49;
            break;

        case 'Dongguan Weijia Electronics Co.,Ltd';
            $data = 17;
            break;
        default:
            $data = '';
    }
    return $data;
}


function ColorControl($value)
{
    switch ($value) {
        case 'Clear';
            $data = 44;
            break;

        case 'Black';
            $data = 5;
            break;

        case 'Red';
            $data = 6;
            break;

        case 'Blue';
            $data = 7;
            break;

        case 'White';
            $data = 4;
            break;

        case 'Black Braided';
            $data = 45;
            break;

        case 'Gold';
            $data = 47;
            break;

        case 'Silver Braided';
            $data = 46;
            break;

        case 'Black Textured';
            $data = 48;
            break;


        default:
            $data = '';
    }
    return $data;
}

function BrandControl($value)
{
    switch ($value) {
        case 'Beon';
            $data = 13;
            break;

        case 'Beon Armor';
            $data = 52;
            break;

        case 'Beon Mobile';
            $data = 53;
            break;

        case 'Beon Power';
            $data = 54;
            break;

        default:
            $data = '';
    }
    return $data;
}


function PortControl($value)
{
    switch ($value) {
        case '2 USB-A Ports';
            $data = 40;
            break;

        default:
            $data = '';
    }
    return $data;
}

function MaterialControl($value)
{
    switch ($value) {
        case 'Aluminum';
            $data = 36;
            break;

        case 'Plastic';
            $data = 37;
            break;

        default:
            $data = '';
    }
    return $data;
}

function TypeControl($value)
{
    switch ($value) {
        case 'Full Cover';
            $data = 51;
            break;


        default:
            $data = '';
    }
    return $data;
}

function  IncludesControl($value)
{
    switch ($value) {
        case 'Micro-USB Cable';
            $data = 39;
            break;

        default:
            $data = '';
    }
    return $data;
}


function CapacityControl($value)
{
    switch ($value) {
        case '10000mAH';
            $data = 32;
            break;

        case '6000mAH';
            $data = 33;
            break;


        case '8000mAH';
            $data = 34;
            break;

        case '13000mAH';
            $data = 35;
            break;

        default:
            $data = '';
    }
    return $data;
}

function LenghtControl($value)
{
    switch ($value) {
        case '100cm';
            $data = 56;
            break;

        case '300cm';
            $data = 57;
            break;


        case '120cm';
            $data = 58;
            break;

        case '15cm';
            $data = 59;
            break;

        default:
            $data = '55';
    }
    return $data;
}


function FromControl($value)
{
    switch ($value) {
        case 'Lightning';
            $data = 18;
            break;

        case 'MDP';
            $data = 19;
            break;


        case 'USB-C';
            $data = 20;
            break;

        case 'Micro-USB';
            $data = 21;
            break;

        case 'Micro-USB, USB-C and Lightning';
            $data = 22;
            break;

        case 'Micro-USB and lightning';
            $data = 23;
            break;


        default:
            $data = '55';
    }
    return $data;
}

function ToControl($value)
{
    switch ($value) {
        case 'USB-A';
            $data = 24;
            break;

        case 'VGA';
            $data = 25;
            break;


        case 'HDMI';
            $data = 26;
            break;

        case 'Micro-USB';
            $data = 27;
            break;

        case '4 USB-A Ports';
            $data = 28;
            break;

        case 'HDMI, USB-C and USB-A';
            $data = 29;
            break;

        case 'VGA, USB-C and USB-A';
            $data = 30;
            break;

        case 'USB-C, 2 USB-A ports, SD and Micro-SD Card Readers ';
            $data = 31;
            break;


        default:
            $data = '';
    }
    return $data;
}