<?php

namespace Kusabi\Date;

use DateTime as NativeDateTime;
use DateTimeZone as NativeDateTimeZone;

class DateTimeZone extends NativeDateTimeZone
{
    /**
     * Override the default constructor, making UTC the default timezone
     *
     * @param string $timezone
     *
     * @see NativeDateTimeZone::__construct
     * @link https://php.net/manual/en/datetimezone.construct.php
     */
    public function __construct($timezone = 'UTC')
    {
        parent::__construct($timezone);
    }

    /**
     * Create an instance for Africa/Abidjan
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AbidjanAfrica()
    {
        return static::instance('Africa/Abidjan');
    }

    /**
     * Create an instance for Africa/Accra
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AccraAfrica()
    {
        return static::instance('Africa/Accra');
    }

    /**
     * Create an instance for America/Adak
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AdakAmerica()
    {
        return static::instance('America/Adak');
    }

    /**
     * Create an instance for Africa/Addis_Ababa
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AddisAbabaAfrica()
    {
        return static::instance('Africa/Addis_Ababa');
    }

    /**
     * Create an instance for Australia/Adelaide
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AdelaideAustralia()
    {
        return static::instance('Australia/Adelaide');
    }

    /**
     * Create an instance for Asia/Aden
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AdenAsia()
    {
        return static::instance('Asia/Aden');
    }

    /**
     * Create an instance for Africa/Algiers
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AlgiersAfrica()
    {
        return static::instance('Africa/Algiers');
    }

    /**
     * Create an instance for Asia/Almaty
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AlmatyAsia()
    {
        return static::instance('Asia/Almaty');
    }

    /**
     * Create an instance for Asia/Amman
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AmmanAsia()
    {
        return static::instance('Asia/Amman');
    }

    /**
     * Create an instance for Europe/Amsterdam
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AmsterdamEurope()
    {
        return static::instance('Europe/Amsterdam');
    }

    /**
     * Create an instance for Asia/Anadyr
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AnadyrAsia()
    {
        return static::instance('Asia/Anadyr');
    }

    /**
     * Create an instance for America/Anchorage
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AnchorageAmerica()
    {
        return static::instance('America/Anchorage');
    }

    /**
     * Create an instance for Europe/Andorra
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AndorraEurope()
    {
        return static::instance('Europe/Andorra');
    }

    /**
     * Create an instance for America/Anguilla
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AnguillaAmerica()
    {
        return static::instance('America/Anguilla');
    }

    /**
     * Create an instance for Indian/Antananarivo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AntananarivoIndian()
    {
        return static::instance('Indian/Antananarivo');
    }

    /**
     * Create an instance for America/Antigua
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AntiguaAmerica()
    {
        return static::instance('America/Antigua');
    }

    /**
     * Create an instance for Pacific/Apia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ApiaPacific()
    {
        return static::instance('Pacific/Apia');
    }

    /**
     * Create an instance for Asia/Aqtau
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AqtauAsia()
    {
        return static::instance('Asia/Aqtau');
    }

    /**
     * Create an instance for Asia/Aqtobe
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AqtobeAsia()
    {
        return static::instance('Asia/Aqtobe');
    }

    /**
     * Create an instance for America/Araguaina
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AraguainaAmerica()
    {
        return static::instance('America/Araguaina');
    }

    /**
     * Create an instance for America/Aruba
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ArubaAmerica()
    {
        return static::instance('America/Aruba');
    }

    /**
     * Create an instance for Asia/Ashgabat
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AshgabatAsia()
    {
        return static::instance('Asia/Ashgabat');
    }

    /**
     * Create an instance for Africa/Asmara
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AsmaraAfrica()
    {
        return static::instance('Africa/Asmara');
    }

    /**
     * Create an instance for Europe/Astrakhan
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AstrakhanEurope()
    {
        return static::instance('Europe/Astrakhan');
    }

    /**
     * Create an instance for America/Asuncion
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AsuncionAmerica()
    {
        return static::instance('America/Asuncion');
    }

    /**
     * Create an instance for Europe/Athens
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AthensEurope()
    {
        return static::instance('Europe/Athens');
    }

    /**
     * Create an instance for America/Atikokan
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AtikokanAmerica()
    {
        return static::instance('America/Atikokan');
    }

    /**
     * Create an instance for Asia/Atyrau
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function AtyrauAsia()
    {
        return static::instance('Asia/Atyrau');
    }

    /**
     * Create an instance for Pacific/Auckland
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AucklandPacific()
    {
        return static::instance('Pacific/Auckland');
    }

    /**
     * Create an instance for Atlantic/Azores
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function AzoresAtlantic()
    {
        return static::instance('Atlantic/Azores');
    }

    /**
     * Create an instance for Asia/Baghdad
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BaghdadAsia()
    {
        return static::instance('Asia/Baghdad');
    }

    /**
     * Create an instance for America/Bahia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BahiaAmerica()
    {
        return static::instance('America/Bahia');
    }

    /**
     * Create an instance for America/Bahia_Banderas
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function BahiaBanderasAmerica()
    {
        return static::instance('America/Bahia_Banderas');
    }

    /**
     * Create an instance for Asia/Bahrain
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BahrainAsia()
    {
        return static::instance('Asia/Bahrain');
    }

    /**
     * Create an instance for Asia/Baku
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BakuAsia()
    {
        return static::instance('Asia/Baku');
    }

    /**
     * Create an instance for Africa/Bamako
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BamakoAfrica()
    {
        return static::instance('Africa/Bamako');
    }

    /**
     * Create an instance for Asia/Bangkok
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BangkokAsia()
    {
        return static::instance('Asia/Bangkok');
    }

    /**
     * Create an instance for Africa/Bangui
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BanguiAfrica()
    {
        return static::instance('Africa/Bangui');
    }

    /**
     * Create an instance for Africa/Banjul
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BanjulAfrica()
    {
        return static::instance('Africa/Banjul');
    }

    /**
     * Create an instance for America/Barbados
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BarbadosAmerica()
    {
        return static::instance('America/Barbados');
    }

    /**
     * Create an instance for Asia/Barnaul
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BarnaulAsia()
    {
        return static::instance('Asia/Barnaul');
    }

    /**
     * Create an instance for Asia/Beirut
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BeirutAsia()
    {
        return static::instance('Asia/Beirut');
    }

    /**
     * Create an instance for America/Belem
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BelemAmerica()
    {
        return static::instance('America/Belem');
    }

    /**
     * Create an instance for Europe/Belgrade
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BelgradeEurope()
    {
        return static::instance('Europe/Belgrade');
    }

    /**
     * Create an instance for America/Belize
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BelizeAmerica()
    {
        return static::instance('America/Belize');
    }

    /**
     * Create an instance for Europe/Berlin
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BerlinEurope()
    {
        return static::instance('Europe/Berlin');
    }

    /**
     * Create an instance for Atlantic/Bermuda
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BermudaAtlantic()
    {
        return static::instance('Atlantic/Bermuda');
    }

    /**
     * Create an instance for America/North_Dakota/Beulah
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BeulahNorthDakotaAmerica()
    {
        return static::instance('America/North_Dakota/Beulah');
    }

    /**
     * Create an instance for Asia/Bishkek
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BishkekAsia()
    {
        return static::instance('Asia/Bishkek');
    }

    /**
     * Create an instance for Africa/Bissau
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BissauAfrica()
    {
        return static::instance('Africa/Bissau');
    }

    /**
     * Create an instance for America/Blanc-Sablon
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function BlancSablonAmerica()
    {
        return static::instance('America/Blanc-Sablon');
    }

    /**
     * Create an instance for Africa/Blantyre
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BlantyreAfrica()
    {
        return static::instance('Africa/Blantyre');
    }

    /**
     * Create an instance for America/Boa_Vista
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BoaVistaAmerica()
    {
        return static::instance('America/Boa_Vista');
    }

    /**
     * Create an instance for America/Bogota
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BogotaAmerica()
    {
        return static::instance('America/Bogota');
    }

    /**
     * Create an instance for America/Boise
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BoiseAmerica()
    {
        return static::instance('America/Boise');
    }

    /**
     * Create an instance for Pacific/Bougainville
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function BougainvillePacific()
    {
        return static::instance('Pacific/Bougainville');
    }

    /**
     * Create an instance for Europe/Bratislava
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BratislavaEurope()
    {
        return static::instance('Europe/Bratislava');
    }

    /**
     * Create an instance for Africa/Brazzaville
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BrazzavilleAfrica()
    {
        return static::instance('Africa/Brazzaville');
    }

    /**
     * Create an instance for Australia/Brisbane
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BrisbaneAustralia()
    {
        return static::instance('Australia/Brisbane');
    }

    /**
     * Create an instance for Australia/Broken_Hill
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BrokenHillAustralia()
    {
        return static::instance('Australia/Broken_Hill');
    }

    /**
     * Create an instance for Asia/Brunei
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BruneiAsia()
    {
        return static::instance('Asia/Brunei');
    }

    /**
     * Create an instance for Europe/Brussels
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BrusselsEurope()
    {
        return static::instance('Europe/Brussels');
    }

    /**
     * Create an instance for Europe/Bucharest
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BucharestEurope()
    {
        return static::instance('Europe/Bucharest');
    }

    /**
     * Create an instance for Europe/Budapest
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BudapestEurope()
    {
        return static::instance('Europe/Budapest');
    }

    /**
     * Create an instance for America/Argentina/Buenos_Aires
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BuenosAiresArgentinaAmerica()
    {
        return static::instance('America/Argentina/Buenos_Aires');
    }

    /**
     * Create an instance for Africa/Bujumbura
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function BujumburaAfrica()
    {
        return static::instance('Africa/Bujumbura');
    }

    /**
     * Create an instance for Europe/Busingen
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function BusingenEurope()
    {
        return static::instance('Europe/Busingen');
    }

    /**
     * Create an instance for Africa/Cairo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CairoAfrica()
    {
        return static::instance('Africa/Cairo');
    }

    /**
     * Create an instance for America/Cambridge_Bay
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CambridgeBayAmerica()
    {
        return static::instance('America/Cambridge_Bay');
    }

    /**
     * Create an instance for America/Campo_Grande
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CampoGrandeAmerica()
    {
        return static::instance('America/Campo_Grande');
    }

    /**
     * Create an instance for Atlantic/Canary
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CanaryAtlantic()
    {
        return static::instance('Atlantic/Canary');
    }

    /**
     * Create an instance for America/Cancun
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CancunAmerica()
    {
        return static::instance('America/Cancun');
    }

    /**
     * Create an instance for Atlantic/Cape_Verde
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CapeVerdeAtlantic()
    {
        return static::instance('Atlantic/Cape_Verde');
    }

    /**
     * Create an instance for America/Caracas
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CaracasAmerica()
    {
        return static::instance('America/Caracas');
    }

    /**
     * Create an instance for Africa/Casablanca
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CasablancaAfrica()
    {
        return static::instance('Africa/Casablanca');
    }

    /**
     * Create an instance for Antarctica/Casey
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CaseyAntarctica()
    {
        return static::instance('Antarctica/Casey');
    }

    /**
     * Create an instance for America/Argentina/Catamarca
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function CatamarcaArgentinaAmerica()
    {
        return static::instance('America/Argentina/Catamarca');
    }

    /**
     * Create an instance for America/Cayenne
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CayenneAmerica()
    {
        return static::instance('America/Cayenne');
    }

    /**
     * Create an instance for America/Cayman
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CaymanAmerica()
    {
        return static::instance('America/Cayman');
    }

    /**
     * Create an instance for America/North_Dakota/Center
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CenterNorthDakotaAmerica()
    {
        return static::instance('America/North_Dakota/Center');
    }

    /**
     * Create an instance for Africa/Ceuta
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function CeutaAfrica()
    {
        return static::instance('Africa/Ceuta');
    }

    /**
     * Create an instance for Indian/Chagos
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ChagosIndian()
    {
        return static::instance('Indian/Chagos');
    }

    /**
     * Create an instance for Pacific/Chatham
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ChathamPacific()
    {
        return static::instance('Pacific/Chatham');
    }

    /**
     * Create an instance for America/Chicago
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ChicagoAmerica()
    {
        return static::instance('America/Chicago');
    }

    /**
     * Create an instance for America/Chihuahua
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ChihuahuaAmerica()
    {
        return static::instance('America/Chihuahua');
    }

    /**
     * Create an instance for Europe/Chisinau
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ChisinauEurope()
    {
        return static::instance('Europe/Chisinau');
    }

    /**
     * Create an instance for Asia/Chita
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ChitaAsia()
    {
        return static::instance('Asia/Chita');
    }

    /**
     * Create an instance for Asia/Choibalsan
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ChoibalsanAsia()
    {
        return static::instance('Asia/Choibalsan');
    }

    /**
     * Create an instance for Indian/Christmas
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ChristmasIndian()
    {
        return static::instance('Indian/Christmas');
    }

    /**
     * Create an instance for Pacific/Chuuk
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ChuukPacific()
    {
        return static::instance('Pacific/Chuuk');
    }

    /**
     * Create an instance for Indian/Cocos
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CocosIndian()
    {
        return static::instance('Indian/Cocos');
    }

    /**
     * Create an instance for Asia/Colombo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ColomboAsia()
    {
        return static::instance('Asia/Colombo');
    }

    /**
     * Create an instance for Indian/Comoro
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ComoroIndian()
    {
        return static::instance('Indian/Comoro');
    }

    /**
     * Create an instance for Africa/Conakry
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ConakryAfrica()
    {
        return static::instance('Africa/Conakry');
    }

    /**
     * Create an instance for Europe/Copenhagen
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CopenhagenEurope()
    {
        return static::instance('Europe/Copenhagen');
    }

    /**
     * Create an instance for America/Argentina/Cordoba
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CordobaArgentinaAmerica()
    {
        return static::instance('America/Argentina/Cordoba');
    }

    /**
     * Create an instance for America/Costa_Rica
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CostaRicaAmerica()
    {
        return static::instance('America/Costa_Rica');
    }

    /**
     * Create an instance for America/Creston
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function CrestonAmerica()
    {
        return static::instance('America/Creston');
    }

    /**
     * Create an instance for America/Cuiaba
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CuiabaAmerica()
    {
        return static::instance('America/Cuiaba');
    }

    /**
     * Create an instance for America/Curacao
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function CuracaoAmerica()
    {
        return static::instance('America/Curacao');
    }

    /**
     * Create an instance for Africa/Dakar
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DakarAfrica()
    {
        return static::instance('Africa/Dakar');
    }

    /**
     * Create an instance for Asia/Damascus
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DamascusAsia()
    {
        return static::instance('Asia/Damascus');
    }

    /**
     * Create an instance for America/Danmarkshavn
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function DanmarkshavnAmerica()
    {
        return static::instance('America/Danmarkshavn');
    }

    /**
     * Create an instance for Africa/Dar_es_Salaam
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DaresSalaamAfrica()
    {
        return static::instance('Africa/Dar_es_Salaam');
    }

    /**
     * Create an instance for Australia/Darwin
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DarwinAustralia()
    {
        return static::instance('Australia/Darwin');
    }

    /**
     * Create an instance for Antarctica/Davis
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DavisAntarctica()
    {
        return static::instance('Antarctica/Davis');
    }

    /**
     * Create an instance for America/Dawson
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DawsonAmerica()
    {
        return static::instance('America/Dawson');
    }

    /**
     * Create an instance for America/Dawson_Creek
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DawsonCreekAmerica()
    {
        return static::instance('America/Dawson_Creek');
    }

    /**
     * Create an instance for America/Denver
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DenverAmerica()
    {
        return static::instance('America/Denver');
    }

    /**
     * Create an instance for America/Detroit
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DetroitAmerica()
    {
        return static::instance('America/Detroit');
    }

    /**
     * Create an instance for Asia/Dhaka
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DhakaAsia()
    {
        return static::instance('Asia/Dhaka');
    }

    /**
     * Create an instance for Asia/Dili
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function DiliAsia()
    {
        return static::instance('Asia/Dili');
    }

    /**
     * Create an instance for Africa/Djibouti
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DjiboutiAfrica()
    {
        return static::instance('Africa/Djibouti');
    }

    /**
     * Create an instance for America/Dominica
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DominicaAmerica()
    {
        return static::instance('America/Dominica');
    }

    /**
     * Create an instance for Africa/Douala
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DoualaAfrica()
    {
        return static::instance('Africa/Douala');
    }

    /**
     * Create an instance for Asia/Dubai
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DubaiAsia()
    {
        return static::instance('Asia/Dubai');
    }

    /**
     * Create an instance for Europe/Dublin
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DublinEurope()
    {
        return static::instance('Europe/Dublin');
    }

    /**
     * Create an instance for Antarctica/DumontDUrville
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function DumontDUrvilleAntarctica()
    {
        return static::instance('Antarctica/DumontDUrville');
    }

    /**
     * Create an instance for Asia/Dushanbe
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function DushanbeAsia()
    {
        return static::instance('Asia/Dushanbe');
    }

    /**
     * Create an instance for Pacific/Easter
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function EasterPacific()
    {
        return static::instance('Pacific/Easter');
    }

    /**
     * Create an instance for America/Edmonton
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function EdmontonAmerica()
    {
        return static::instance('America/Edmonton');
    }

    /**
     * Create an instance for Pacific/Efate
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function EfatePacific()
    {
        return static::instance('Pacific/Efate');
    }

    /**
     * Create an instance for America/Eirunepe
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function EirunepeAmerica()
    {
        return static::instance('America/Eirunepe');
    }

    /**
     * Create an instance for Africa/El_Aaiun
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ElAaiunAfrica()
    {
        return static::instance('Africa/El_Aaiun');
    }

    /**
     * Create an instance for America/El_Salvador
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ElSalvadorAmerica()
    {
        return static::instance('America/El_Salvador');
    }

    /**
     * Create an instance for Pacific/Enderbury
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function EnderburyPacific()
    {
        return static::instance('Pacific/Enderbury');
    }

    /**
     * Create an instance for Australia/Eucla
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function EuclaAustralia()
    {
        return static::instance('Australia/Eucla');
    }

    /**
     * Create an instance for Pacific/Fakaofo
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function FakaofoPacific()
    {
        return static::instance('Pacific/Fakaofo');
    }

    /**
     * Create an instance for Asia/Famagusta
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function FamagustaAsia()
    {
        return static::instance('Asia/Famagusta');
    }

    /**
     * Create an instance for Atlantic/Faroe
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function FaroeAtlantic()
    {
        return static::instance('Atlantic/Faroe');
    }

    /**
     * Create an instance for Pacific/Fiji
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function FijiPacific()
    {
        return static::instance('Pacific/Fiji');
    }

    /**
     * Create an instance for America/Fort_Nelson
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function FortNelsonAmerica()
    {
        return static::instance('America/Fort_Nelson');
    }

    /**
     * Create an instance for America/Fortaleza
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function FortalezaAmerica()
    {
        return static::instance('America/Fortaleza');
    }

    /**
     * Create an instance for Africa/Freetown
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function FreetownAfrica()
    {
        return static::instance('Africa/Freetown');
    }

    /**
     * Create an instance for Pacific/Funafuti
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function FunafutiPacific()
    {
        return static::instance('Pacific/Funafuti');
    }

    /**
     * Create an instance for Africa/Gaborone
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GaboroneAfrica()
    {
        return static::instance('Africa/Gaborone');
    }

    /**
     * Create an instance for Pacific/Galapagos
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GalapagosPacific()
    {
        return static::instance('Pacific/Galapagos');
    }

    /**
     * Create an instance for Pacific/Gambier
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GambierPacific()
    {
        return static::instance('Pacific/Gambier');
    }

    /**
     * Create an instance for Asia/Gaza
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GazaAsia()
    {
        return static::instance('Asia/Gaza');
    }

    /**
     * Create an instance for Europe/Gibraltar
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GibraltarEurope()
    {
        return static::instance('Europe/Gibraltar');
    }

    /**
     * Create an instance for America/Glace_Bay
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GlaceBayAmerica()
    {
        return static::instance('America/Glace_Bay');
    }

    /**
     * Create an instance for America/Goose_Bay
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GooseBayAmerica()
    {
        return static::instance('America/Goose_Bay');
    }

    /**
     * Create an instance for America/Grand_Turk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GrandTurkAmerica()
    {
        return static::instance('America/Grand_Turk');
    }

    /**
     * Create an instance for America/Grenada
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GrenadaAmerica()
    {
        return static::instance('America/Grenada');
    }

    /**
     * Create an instance for Pacific/Guadalcanal
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuadalcanalPacific()
    {
        return static::instance('Pacific/Guadalcanal');
    }

    /**
     * Create an instance for America/Guadeloupe
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuadeloupeAmerica()
    {
        return static::instance('America/Guadeloupe');
    }

    /**
     * Create an instance for Pacific/Guam
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuamPacific()
    {
        return static::instance('Pacific/Guam');
    }

    /**
     * Create an instance for America/Guatemala
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuatemalaAmerica()
    {
        return static::instance('America/Guatemala');
    }

    /**
     * Create an instance for America/Guayaquil
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuayaquilAmerica()
    {
        return static::instance('America/Guayaquil');
    }

    /**
     * Create an instance for Europe/Guernsey
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuernseyEurope()
    {
        return static::instance('Europe/Guernsey');
    }

    /**
     * Create an instance for America/Guyana
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function GuyanaAmerica()
    {
        return static::instance('America/Guyana');
    }

    /**
     * Create an instance for America/Halifax
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HalifaxAmerica()
    {
        return static::instance('America/Halifax');
    }

    /**
     * Create an instance for Africa/Harare
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HarareAfrica()
    {
        return static::instance('Africa/Harare');
    }

    /**
     * Create an instance for America/Havana
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HavanaAmerica()
    {
        return static::instance('America/Havana');
    }

    /**
     * Create an instance for Asia/Hebron
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function HebronAsia()
    {
        return static::instance('Asia/Hebron');
    }

    /**
     * Create an instance for Europe/Helsinki
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HelsinkiEurope()
    {
        return static::instance('Europe/Helsinki');
    }

    /**
     * Create an instance for America/Hermosillo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HermosilloAmerica()
    {
        return static::instance('America/Hermosillo');
    }

    /**
     * Create an instance for Asia/Ho_Chi_Minh
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HoChiMinhAsia()
    {
        return static::instance('Asia/Ho_Chi_Minh');
    }

    /**
     * Create an instance for Australia/Hobart
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HobartAustralia()
    {
        return static::instance('Australia/Hobart');
    }

    /**
     * Create an instance for Asia/Hong_Kong
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HongKongAsia()
    {
        return static::instance('Asia/Hong_Kong');
    }

    /**
     * Create an instance for Pacific/Honolulu
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function HonoluluPacific()
    {
        return static::instance('Pacific/Honolulu');
    }

    /**
     * Create an instance for Asia/Hovd
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function HovdAsia()
    {
        return static::instance('Asia/Hovd');
    }

    /**
     * Create an instance for America/Indiana/Indianapolis
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function IndianapolisIndianaAmerica()
    {
        return static::instance('America/Indiana/Indianapolis');
    }

    /**
     * Create an instance for America/Inuvik
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function InuvikAmerica()
    {
        return static::instance('America/Inuvik');
    }

    /**
     * Create an instance for America/Iqaluit
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function IqaluitAmerica()
    {
        return static::instance('America/Iqaluit');
    }

    /**
     * Create an instance for Asia/Irkutsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function IrkutskAsia()
    {
        return static::instance('Asia/Irkutsk');
    }

    /**
     * Create an instance for Europe/Isle_of_Man
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function IsleofManEurope()
    {
        return static::instance('Europe/Isle_of_Man');
    }

    /**
     * Create an instance for Europe/Istanbul
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function IstanbulEurope()
    {
        return static::instance('Europe/Istanbul');
    }

    /**
     * Create an instance for Asia/Jakarta
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JakartaAsia()
    {
        return static::instance('Asia/Jakarta');
    }

    /**
     * Create an instance for America/Jamaica
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JamaicaAmerica()
    {
        return static::instance('America/Jamaica');
    }

    /**
     * Create an instance for Asia/Jayapura
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JayapuraAsia()
    {
        return static::instance('Asia/Jayapura');
    }

    /**
     * Create an instance for Europe/Jersey
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JerseyEurope()
    {
        return static::instance('Europe/Jersey');
    }

    /**
     * Create an instance for Asia/Jerusalem
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JerusalemAsia()
    {
        return static::instance('Asia/Jerusalem');
    }

    /**
     * Create an instance for Africa/Johannesburg
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JohannesburgAfrica()
    {
        return static::instance('Africa/Johannesburg');
    }

    /**
     * Create an instance for Africa/Juba
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function JubaAfrica()
    {
        return static::instance('Africa/Juba');
    }

    /**
     * Create an instance for America/Argentina/Jujuy
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function JujuyArgentinaAmerica()
    {
        return static::instance('America/Argentina/Jujuy');
    }

    /**
     * Create an instance for America/Juneau
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function JuneauAmerica()
    {
        return static::instance('America/Juneau');
    }

    /**
     * Create an instance for Asia/Kabul
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KabulAsia()
    {
        return static::instance('Asia/Kabul');
    }

    /**
     * Create an instance for Europe/Kaliningrad
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KaliningradEurope()
    {
        return static::instance('Europe/Kaliningrad');
    }

    /**
     * Create an instance for Asia/Kamchatka
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KamchatkaAsia()
    {
        return static::instance('Asia/Kamchatka');
    }

    /**
     * Create an instance for Africa/Kampala
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KampalaAfrica()
    {
        return static::instance('Africa/Kampala');
    }

    /**
     * Create an instance for Asia/Karachi
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KarachiAsia()
    {
        return static::instance('Asia/Karachi');
    }

    /**
     * Create an instance for Asia/Kathmandu
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KathmanduAsia()
    {
        return static::instance('Asia/Kathmandu');
    }

    /**
     * Create an instance for Indian/Kerguelen
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KerguelenIndian()
    {
        return static::instance('Indian/Kerguelen');
    }

    /**
     * Create an instance for Asia/Khandyga
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KhandygaAsia()
    {
        return static::instance('Asia/Khandyga');
    }

    /**
     * Create an instance for Africa/Khartoum
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KhartoumAfrica()
    {
        return static::instance('Africa/Khartoum');
    }

    /**
     * Create an instance for Europe/Kiev
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KievEurope()
    {
        return static::instance('Europe/Kiev');
    }

    /**
     * Create an instance for Africa/Kigali
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KigaliAfrica()
    {
        return static::instance('Africa/Kigali');
    }

    /**
     * Create an instance for Africa/Kinshasa
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KinshasaAfrica()
    {
        return static::instance('Africa/Kinshasa');
    }

    /**
     * Create an instance for Pacific/Kiritimati
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KiritimatiPacific()
    {
        return static::instance('Pacific/Kiritimati');
    }

    /**
     * Create an instance for Europe/Kirov
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KirovEurope()
    {
        return static::instance('Europe/Kirov');
    }

    /**
     * Create an instance for America/Indiana/Knox
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KnoxIndianaAmerica()
    {
        return static::instance('America/Indiana/Knox');
    }

    /**
     * Create an instance for Asia/Kolkata
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KolkataAsia()
    {
        return static::instance('Asia/Kolkata');
    }

    /**
     * Create an instance for Pacific/Kosrae
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KosraePacific()
    {
        return static::instance('Pacific/Kosrae');
    }

    /**
     * Create an instance for America/Kralendijk
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KralendijkAmerica()
    {
        return static::instance('America/Kralendijk');
    }

    /**
     * Create an instance for Asia/Krasnoyarsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KrasnoyarskAsia()
    {
        return static::instance('Asia/Krasnoyarsk');
    }

    /**
     * Create an instance for Asia/Kuala_Lumpur
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KualaLumpurAsia()
    {
        return static::instance('Asia/Kuala_Lumpur');
    }

    /**
     * Create an instance for Asia/Kuching
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function KuchingAsia()
    {
        return static::instance('Asia/Kuching');
    }

    /**
     * Create an instance for Asia/Kuwait
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KuwaitAsia()
    {
        return static::instance('Asia/Kuwait');
    }

    /**
     * Create an instance for Pacific/Kwajalein
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function KwajaleinPacific()
    {
        return static::instance('Pacific/Kwajalein');
    }

    /**
     * Create an instance for America/La_Paz
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LaPazAmerica()
    {
        return static::instance('America/La_Paz');
    }

    /**
     * Create an instance for America/Argentina/La_Rioja
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function LaRiojaArgentinaAmerica()
    {
        return static::instance('America/Argentina/La_Rioja');
    }

    /**
     * Create an instance for Africa/Lagos
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LagosAfrica()
    {
        return static::instance('Africa/Lagos');
    }

    /**
     * Create an instance for Africa/Libreville
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LibrevilleAfrica()
    {
        return static::instance('Africa/Libreville');
    }

    /**
     * Create an instance for America/Lima
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LimaAmerica()
    {
        return static::instance('America/Lima');
    }

    /**
     * Create an instance for Australia/Lindeman
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function LindemanAustralia()
    {
        return static::instance('Australia/Lindeman');
    }

    /**
     * Create an instance for Europe/Lisbon
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LisbonEurope()
    {
        return static::instance('Europe/Lisbon');
    }

    /**
     * Create an instance for Europe/Ljubljana
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LjubljanaEurope()
    {
        return static::instance('Europe/Ljubljana');
    }

    /**
     * Create an instance for Africa/Lome
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LomeAfrica()
    {
        return static::instance('Africa/Lome');
    }

    /**
     * Create an instance for Europe/London
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LondonEurope()
    {
        return static::instance('Europe/London');
    }

    /**
     * Create an instance for Arctic/Longyearbyen
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function LongyearbyenArctic()
    {
        return static::instance('Arctic/Longyearbyen');
    }

    /**
     * Create an instance for Australia/Lord_Howe
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LordHoweAustralia()
    {
        return static::instance('Australia/Lord_Howe');
    }

    /**
     * Create an instance for America/Los_Angeles
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LosAngelesAmerica()
    {
        return static::instance('America/Los_Angeles');
    }

    /**
     * Create an instance for America/Kentucky/Louisville
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LouisvilleKentuckyAmerica()
    {
        return static::instance('America/Kentucky/Louisville');
    }

    /**
     * Create an instance for America/Lower_Princes
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LowerPrincesAmerica()
    {
        return static::instance('America/Lower_Princes');
    }

    /**
     * Create an instance for Africa/Luanda
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LuandaAfrica()
    {
        return static::instance('Africa/Luanda');
    }

    /**
     * Create an instance for Africa/Lubumbashi
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LubumbashiAfrica()
    {
        return static::instance('Africa/Lubumbashi');
    }

    /**
     * Create an instance for Africa/Lusaka
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LusakaAfrica()
    {
        return static::instance('Africa/Lusaka');
    }

    /**
     * Create an instance for Europe/Luxembourg
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function LuxembourgEurope()
    {
        return static::instance('Europe/Luxembourg');
    }

    /**
     * Create an instance for Asia/Macau
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MacauAsia()
    {
        return static::instance('Asia/Macau');
    }

    /**
     * Create an instance for America/Maceio
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MaceioAmerica()
    {
        return static::instance('America/Maceio');
    }

    /**
     * Create an instance for Antarctica/Macquarie
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MacquarieAntarctica()
    {
        return static::instance('Antarctica/Macquarie');
    }

    /**
     * Create an instance for Atlantic/Madeira
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MadeiraAtlantic()
    {
        return static::instance('Atlantic/Madeira');
    }

    /**
     * Create an instance for Europe/Madrid
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MadridEurope()
    {
        return static::instance('Europe/Madrid');
    }

    /**
     * Create an instance for Asia/Magadan
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MagadanAsia()
    {
        return static::instance('Asia/Magadan');
    }

    /**
     * Create an instance for Indian/Mahe
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MaheIndian()
    {
        return static::instance('Indian/Mahe');
    }

    /**
     * Create an instance for Pacific/Majuro
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MajuroPacific()
    {
        return static::instance('Pacific/Majuro');
    }

    /**
     * Create an instance for Asia/Makassar
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MakassarAsia()
    {
        return static::instance('Asia/Makassar');
    }

    /**
     * Create an instance for Africa/Malabo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MalaboAfrica()
    {
        return static::instance('Africa/Malabo');
    }

    /**
     * Create an instance for Indian/Maldives
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MaldivesIndian()
    {
        return static::instance('Indian/Maldives');
    }

    /**
     * Create an instance for Europe/Malta
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MaltaEurope()
    {
        return static::instance('Europe/Malta');
    }

    /**
     * Create an instance for America/Managua
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ManaguaAmerica()
    {
        return static::instance('America/Managua');
    }

    /**
     * Create an instance for America/Manaus
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ManausAmerica()
    {
        return static::instance('America/Manaus');
    }

    /**
     * Create an instance for Asia/Manila
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ManilaAsia()
    {
        return static::instance('Asia/Manila');
    }

    /**
     * Create an instance for Africa/Maputo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MaputoAfrica()
    {
        return static::instance('Africa/Maputo');
    }

    /**
     * Create an instance for America/Indiana/Marengo
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MarengoIndianaAmerica()
    {
        return static::instance('America/Indiana/Marengo');
    }

    /**
     * Create an instance for Europe/Mariehamn
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MariehamnEurope()
    {
        return static::instance('Europe/Mariehamn');
    }

    /**
     * Create an instance for America/Marigot
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MarigotAmerica()
    {
        return static::instance('America/Marigot');
    }

    /**
     * Create an instance for Pacific/Marquesas
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MarquesasPacific()
    {
        return static::instance('Pacific/Marquesas');
    }

    /**
     * Create an instance for America/Martinique
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MartiniqueAmerica()
    {
        return static::instance('America/Martinique');
    }

    /**
     * Create an instance for Africa/Maseru
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MaseruAfrica()
    {
        return static::instance('Africa/Maseru');
    }

    /**
     * Create an instance for America/Matamoros
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MatamorosAmerica()
    {
        return static::instance('America/Matamoros');
    }

    /**
     * Create an instance for Indian/Mauritius
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MauritiusIndian()
    {
        return static::instance('Indian/Mauritius');
    }

    /**
     * Create an instance for Antarctica/Mawson
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MawsonAntarctica()
    {
        return static::instance('Antarctica/Mawson');
    }

    /**
     * Create an instance for Indian/Mayotte
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MayotteIndian()
    {
        return static::instance('Indian/Mayotte');
    }

    /**
     * Create an instance for America/Mazatlan
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MazatlanAmerica()
    {
        return static::instance('America/Mazatlan');
    }

    /**
     * Create an instance for Africa/Mbabane
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MbabaneAfrica()
    {
        return static::instance('Africa/Mbabane');
    }

    /**
     * Create an instance for Antarctica/McMurdo
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function McMurdoAntarctica()
    {
        return static::instance('Antarctica/McMurdo');
    }

    /**
     * Create an instance for Australia/Melbourne
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MelbourneAustralia()
    {
        return static::instance('Australia/Melbourne');
    }

    /**
     * Create an instance for America/Argentina/Mendoza
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MendozaArgentinaAmerica()
    {
        return static::instance('America/Argentina/Mendoza');
    }

    /**
     * Create an instance for America/Menominee
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MenomineeAmerica()
    {
        return static::instance('America/Menominee');
    }

    /**
     * Create an instance for America/Merida
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MeridaAmerica()
    {
        return static::instance('America/Merida');
    }

    /**
     * Create an instance for America/Metlakatla
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MetlakatlaAmerica()
    {
        return static::instance('America/Metlakatla');
    }

    /**
     * Create an instance for America/Mexico_City
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MexicoCityAmerica()
    {
        return static::instance('America/Mexico_City');
    }

    /**
     * Create an instance for Pacific/Midway
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MidwayPacific()
    {
        return static::instance('Pacific/Midway');
    }

    /**
     * Create an instance for Europe/Minsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MinskEurope()
    {
        return static::instance('Europe/Minsk');
    }

    /**
     * Create an instance for America/Miquelon
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MiquelonAmerica()
    {
        return static::instance('America/Miquelon');
    }

    /**
     * Create an instance for Africa/Mogadishu
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MogadishuAfrica()
    {
        return static::instance('Africa/Mogadishu');
    }

    /**
     * Create an instance for Europe/Monaco
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MonacoEurope()
    {
        return static::instance('Europe/Monaco');
    }

    /**
     * Create an instance for America/Moncton
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function MonctonAmerica()
    {
        return static::instance('America/Moncton');
    }

    /**
     * Create an instance for Africa/Monrovia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MonroviaAfrica()
    {
        return static::instance('Africa/Monrovia');
    }

    /**
     * Create an instance for America/Monterrey
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MonterreyAmerica()
    {
        return static::instance('America/Monterrey');
    }

    /**
     * Create an instance for America/Montevideo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MontevideoAmerica()
    {
        return static::instance('America/Montevideo');
    }

    /**
     * Create an instance for America/Kentucky/Monticello
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MonticelloKentuckyAmerica()
    {
        return static::instance('America/Kentucky/Monticello');
    }

    /**
     * Create an instance for America/Montserrat
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MontserratAmerica()
    {
        return static::instance('America/Montserrat');
    }

    /**
     * Create an instance for Europe/Moscow
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MoscowEurope()
    {
        return static::instance('Europe/Moscow');
    }

    /**
     * Create an instance for Asia/Muscat
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function MuscatAsia()
    {
        return static::instance('Asia/Muscat');
    }

    /**
     * Create an instance for Africa/Nairobi
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NairobiAfrica()
    {
        return static::instance('Africa/Nairobi');
    }

    /**
     * Create an instance for America/Nassau
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NassauAmerica()
    {
        return static::instance('America/Nassau');
    }

    /**
     * Create an instance for Pacific/Nauru
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NauruPacific()
    {
        return static::instance('Pacific/Nauru');
    }

    /**
     * Create an instance for Africa/Ndjamena
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NdjamenaAfrica()
    {
        return static::instance('Africa/Ndjamena');
    }

    /**
     * Create an instance for America/North_Dakota/New_Salem
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NewSalemNorthDakotaAmerica()
    {
        return static::instance('America/North_Dakota/New_Salem');
    }

    /**
     * Create an instance for America/New_York
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NewYorkAmerica()
    {
        return static::instance('America/New_York');
    }

    /**
     * Create an instance for Africa/Niamey
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NiameyAfrica()
    {
        return static::instance('Africa/Niamey');
    }

    /**
     * Create an instance for Asia/Nicosia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NicosiaAsia()
    {
        return static::instance('Asia/Nicosia');
    }

    /**
     * Create an instance for America/Nipigon
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function NipigonAmerica()
    {
        return static::instance('America/Nipigon');
    }

    /**
     * Create an instance for Pacific/Niue
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function NiuePacific()
    {
        return static::instance('Pacific/Niue');
    }

    /**
     * Create an instance for America/Nome
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NomeAmerica()
    {
        return static::instance('America/Nome');
    }

    /**
     * Create an instance for Pacific/Norfolk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NorfolkPacific()
    {
        return static::instance('Pacific/Norfolk');
    }

    /**
     * Create an instance for America/Noronha
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function NoronhaAmerica()
    {
        return static::instance('America/Noronha');
    }

    /**
     * Create an instance for Africa/Nouakchott
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NouakchottAfrica()
    {
        return static::instance('Africa/Nouakchott');
    }

    /**
     * Create an instance for Pacific/Noumea
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NoumeaPacific()
    {
        return static::instance('Pacific/Noumea');
    }

    /**
     * Create an instance for Asia/Novokuznetsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NovokuznetskAsia()
    {
        return static::instance('Asia/Novokuznetsk');
    }

    /**
     * Create an instance for Asia/Novosibirsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function NovosibirskAsia()
    {
        return static::instance('Asia/Novosibirsk');
    }

    /**
     * Create an instance for America/Nuuk
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function NuukAmerica()
    {
        return static::instance('America/Nuuk');
    }

    /**
     * Create an instance for America/Ojinaga
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function OjinagaAmerica()
    {
        return static::instance('America/Ojinaga');
    }

    /**
     * Create an instance for Asia/Omsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function OmskAsia()
    {
        return static::instance('Asia/Omsk');
    }

    /**
     * Create an instance for Asia/Oral
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function OralAsia()
    {
        return static::instance('Asia/Oral');
    }

    /**
     * Create an instance for Europe/Oslo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function OsloEurope()
    {
        return static::instance('Europe/Oslo');
    }

    /**
     * Create an instance for Africa/Ouagadougou
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function OuagadougouAfrica()
    {
        return static::instance('Africa/Ouagadougou');
    }

    /**
     * Create an instance for Pacific/Pago_Pago
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PagoPagoPacific()
    {
        return static::instance('Pacific/Pago_Pago');
    }

    /**
     * Create an instance for Pacific/Palau
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PalauPacific()
    {
        return static::instance('Pacific/Palau');
    }

    /**
     * Create an instance for Antarctica/Palmer
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PalmerAntarctica()
    {
        return static::instance('Antarctica/Palmer');
    }

    /**
     * Create an instance for America/Panama
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PanamaAmerica()
    {
        return static::instance('America/Panama');
    }

    /**
     * Create an instance for America/Pangnirtung
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PangnirtungAmerica()
    {
        return static::instance('America/Pangnirtung');
    }

    /**
     * Create an instance for America/Paramaribo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ParamariboAmerica()
    {
        return static::instance('America/Paramaribo');
    }

    /**
     * Create an instance for Europe/Paris
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ParisEurope()
    {
        return static::instance('Europe/Paris');
    }

    /**
     * Create an instance for Australia/Perth
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PerthAustralia()
    {
        return static::instance('Australia/Perth');
    }

    /**
     * Create an instance for America/Indiana/Petersburg
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PetersburgIndianaAmerica()
    {
        return static::instance('America/Indiana/Petersburg');
    }

    /**
     * Create an instance for Asia/Phnom_Penh
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PhnomPenhAsia()
    {
        return static::instance('Asia/Phnom_Penh');
    }

    /**
     * Create an instance for America/Phoenix
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PhoenixAmerica()
    {
        return static::instance('America/Phoenix');
    }

    /**
     * Create an instance for Pacific/Pitcairn
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PitcairnPacific()
    {
        return static::instance('Pacific/Pitcairn');
    }

    /**
     * Create an instance for Europe/Podgorica
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PodgoricaEurope()
    {
        return static::instance('Europe/Podgorica');
    }

    /**
     * Create an instance for Pacific/Pohnpei
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PohnpeiPacific()
    {
        return static::instance('Pacific/Pohnpei');
    }

    /**
     * Create an instance for Asia/Pontianak
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PontianakAsia()
    {
        return static::instance('Asia/Pontianak');
    }

    /**
     * Create an instance for Pacific/Port_Moresby
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PortMoresbyPacific()
    {
        return static::instance('Pacific/Port_Moresby');
    }

    /**
     * Create an instance for America/Port-au-Prince
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PortauPrinceAmerica()
    {
        return static::instance('America/Port-au-Prince');
    }

    /**
     * Create an instance for Africa/Porto-Novo
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PortoNovoAfrica()
    {
        return static::instance('Africa/Porto-Novo');
    }

    /**
     * Create an instance for America/Porto_Velho
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PortoVelhoAmerica()
    {
        return static::instance('America/Porto_Velho');
    }

    /**
     * Create an instance for America/Port_of_Spain
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PortofSpainAmerica()
    {
        return static::instance('America/Port_of_Spain');
    }

    /**
     * Create an instance for Europe/Prague
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PragueEurope()
    {
        return static::instance('Europe/Prague');
    }

    /**
     * Create an instance for America/Puerto_Rico
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PuertoRicoAmerica()
    {
        return static::instance('America/Puerto_Rico');
    }

    /**
     * Create an instance for America/Punta_Arenas
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function PuntaArenasAmerica()
    {
        return static::instance('America/Punta_Arenas');
    }

    /**
     * Create an instance for Asia/Pyongyang
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function PyongyangAsia()
    {
        return static::instance('Asia/Pyongyang');
    }

    /**
     * Create an instance for Asia/Qatar
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function QatarAsia()
    {
        return static::instance('Asia/Qatar');
    }

    /**
     * Create an instance for Asia/Qostanay
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function QostanayAsia()
    {
        return static::instance('Asia/Qostanay');
    }

    /**
     * Create an instance for Asia/Qyzylorda
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function QyzylordaAsia()
    {
        return static::instance('Asia/Qyzylorda');
    }

    /**
     * Create an instance for America/Rainy_River
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RainyRiverAmerica()
    {
        return static::instance('America/Rainy_River');
    }

    /**
     * Create an instance for America/Rankin_Inlet
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RankinInletAmerica()
    {
        return static::instance('America/Rankin_Inlet');
    }

    /**
     * Create an instance for Pacific/Rarotonga
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function RarotongaPacific()
    {
        return static::instance('Pacific/Rarotonga');
    }

    /**
     * Create an instance for America/Recife
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RecifeAmerica()
    {
        return static::instance('America/Recife');
    }

    /**
     * Create an instance for America/Regina
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ReginaAmerica()
    {
        return static::instance('America/Regina');
    }

    /**
     * Create an instance for America/Resolute
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ResoluteAmerica()
    {
        return static::instance('America/Resolute');
    }

    /**
     * Create an instance for Indian/Reunion
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ReunionIndian()
    {
        return static::instance('Indian/Reunion');
    }

    /**
     * Create an instance for Atlantic/Reykjavik
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ReykjavikAtlantic()
    {
        return static::instance('Atlantic/Reykjavik');
    }

    /**
     * Create an instance for Europe/Riga
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RigaEurope()
    {
        return static::instance('Europe/Riga');
    }

    /**
     * Create an instance for America/Rio_Branco
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function RioBrancoAmerica()
    {
        return static::instance('America/Rio_Branco');
    }

    /**
     * Create an instance for America/Argentina/Rio_Gallegos
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RioGallegosArgentinaAmerica()
    {
        return static::instance('America/Argentina/Rio_Gallegos');
    }

    /**
     * Create an instance for Asia/Riyadh
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RiyadhAsia()
    {
        return static::instance('Asia/Riyadh');
    }

    /**
     * Create an instance for Europe/Rome
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function RomeEurope()
    {
        return static::instance('Europe/Rome');
    }

    /**
     * Create an instance for Antarctica/Rothera
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function RotheraAntarctica()
    {
        return static::instance('Antarctica/Rothera');
    }

    /**
     * Create an instance for Pacific/Saipan
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SaipanPacific()
    {
        return static::instance('Pacific/Saipan');
    }

    /**
     * Create an instance for Asia/Sakhalin
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SakhalinAsia()
    {
        return static::instance('Asia/Sakhalin');
    }

    /**
     * Create an instance for America/Argentina/Salta
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SaltaArgentinaAmerica()
    {
        return static::instance('America/Argentina/Salta');
    }

    /**
     * Create an instance for Europe/Samara
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SamaraEurope()
    {
        return static::instance('Europe/Samara');
    }

    /**
     * Create an instance for Asia/Samarkand
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SamarkandAsia()
    {
        return static::instance('Asia/Samarkand');
    }

    /**
     * Create an instance for America/Argentina/San_Juan
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SanJuanArgentinaAmerica()
    {
        return static::instance('America/Argentina/San_Juan');
    }

    /**
     * Create an instance for America/Argentina/San_Luis
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SanLuisArgentinaAmerica()
    {
        return static::instance('America/Argentina/San_Luis');
    }

    /**
     * Create an instance for Europe/San_Marino
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SanMarinoEurope()
    {
        return static::instance('Europe/San_Marino');
    }

    /**
     * Create an instance for America/Santarem
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SantaremAmerica()
    {
        return static::instance('America/Santarem');
    }

    /**
     * Create an instance for America/Santiago
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SantiagoAmerica()
    {
        return static::instance('America/Santiago');
    }

    /**
     * Create an instance for America/Santo_Domingo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SantoDomingoAmerica()
    {
        return static::instance('America/Santo_Domingo');
    }

    /**
     * Create an instance for America/Sao_Paulo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SaoPauloAmerica()
    {
        return static::instance('America/Sao_Paulo');
    }

    /**
     * Create an instance for Africa/Sao_Tome
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SaoTomeAfrica()
    {
        return static::instance('Africa/Sao_Tome');
    }

    /**
     * Create an instance for Europe/Sarajevo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SarajevoEurope()
    {
        return static::instance('Europe/Sarajevo');
    }

    /**
     * Create an instance for Europe/Saratov
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SaratovEurope()
    {
        return static::instance('Europe/Saratov');
    }

    /**
     * Create an instance for America/Scoresbysund
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function ScoresbysundAmerica()
    {
        return static::instance('America/Scoresbysund');
    }

    /**
     * Create an instance for Asia/Seoul
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SeoulAsia()
    {
        return static::instance('Asia/Seoul');
    }

    /**
     * Create an instance for Asia/Shanghai
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ShanghaiAsia()
    {
        return static::instance('Asia/Shanghai');
    }

    /**
     * Create an instance for Europe/Simferopol
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SimferopolEurope()
    {
        return static::instance('Europe/Simferopol');
    }

    /**
     * Create an instance for Asia/Singapore
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SingaporeAsia()
    {
        return static::instance('Asia/Singapore');
    }

    /**
     * Create an instance for America/Sitka
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SitkaAmerica()
    {
        return static::instance('America/Sitka');
    }

    /**
     * Create an instance for Europe/Skopje
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SkopjeEurope()
    {
        return static::instance('Europe/Skopje');
    }

    /**
     * Create an instance for Europe/Sofia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SofiaEurope()
    {
        return static::instance('Europe/Sofia');
    }

    /**
     * Create an instance for Atlantic/South_Georgia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SouthGeorgiaAtlantic()
    {
        return static::instance('Atlantic/South_Georgia');
    }

    /**
     * Create an instance for Asia/Srednekolymsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SrednekolymskAsia()
    {
        return static::instance('Asia/Srednekolymsk');
    }

    /**
     * Create an instance for America/St_Barthelemy
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StBarthelemyAmerica()
    {
        return static::instance('America/St_Barthelemy');
    }

    /**
     * Create an instance for Atlantic/St_Helena
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StHelenaAtlantic()
    {
        return static::instance('Atlantic/St_Helena');
    }

    /**
     * Create an instance for America/St_Johns
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StJohnsAmerica()
    {
        return static::instance('America/St_Johns');
    }

    /**
     * Create an instance for America/St_Kitts
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function StKittsAmerica()
    {
        return static::instance('America/St_Kitts');
    }

    /**
     * Create an instance for America/St_Lucia
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StLuciaAmerica()
    {
        return static::instance('America/St_Lucia');
    }

    /**
     * Create an instance for America/St_Thomas
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StThomasAmerica()
    {
        return static::instance('America/St_Thomas');
    }

    /**
     * Create an instance for America/St_Vincent
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StVincentAmerica()
    {
        return static::instance('America/St_Vincent');
    }

    /**
     * Create an instance for Atlantic/Stanley
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StanleyAtlantic()
    {
        return static::instance('Atlantic/Stanley');
    }

    /**
     * Create an instance for Europe/Stockholm
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function StockholmEurope()
    {
        return static::instance('Europe/Stockholm');
    }

    /**
     * Create an instance for America/Swift_Current
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SwiftCurrentAmerica()
    {
        return static::instance('America/Swift_Current');
    }

    /**
     * Create an instance for Australia/Sydney
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function SydneyAustralia()
    {
        return static::instance('Australia/Sydney');
    }

    /**
     * Create an instance for Antarctica/Syowa
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function SyowaAntarctica()
    {
        return static::instance('Antarctica/Syowa');
    }

    /**
     * Create an instance for Pacific/Tahiti
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TahitiPacific()
    {
        return static::instance('Pacific/Tahiti');
    }

    /**
     * Create an instance for Asia/Taipei
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TaipeiAsia()
    {
        return static::instance('Asia/Taipei');
    }

    /**
     * Create an instance for Europe/Tallinn
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TallinnEurope()
    {
        return static::instance('Europe/Tallinn');
    }

    /**
     * Create an instance for Pacific/Tarawa
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TarawaPacific()
    {
        return static::instance('Pacific/Tarawa');
    }

    /**
     * Create an instance for Asia/Tashkent
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TashkentAsia()
    {
        return static::instance('Asia/Tashkent');
    }

    /**
     * Create an instance for Asia/Tbilisi
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TbilisiAsia()
    {
        return static::instance('Asia/Tbilisi');
    }

    /**
     * Create an instance for America/Tegucigalpa
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TegucigalpaAmerica()
    {
        return static::instance('America/Tegucigalpa');
    }

    /**
     * Create an instance for Asia/Tehran
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TehranAsia()
    {
        return static::instance('Asia/Tehran');
    }

    /**
     * Create an instance for America/Indiana/Tell_City
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TellCityIndianaAmerica()
    {
        return static::instance('America/Indiana/Tell_City');
    }

    /**
     * Create an instance for Asia/Thimphu
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ThimphuAsia()
    {
        return static::instance('Asia/Thimphu');
    }

    /**
     * Create an instance for America/Thule
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ThuleAmerica()
    {
        return static::instance('America/Thule');
    }

    /**
     * Create an instance for America/Thunder_Bay
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ThunderBayAmerica()
    {
        return static::instance('America/Thunder_Bay');
    }

    /**
     * Create an instance for America/Tijuana
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TijuanaAmerica()
    {
        return static::instance('America/Tijuana');
    }

    /**
     * Create an instance for Europe/Tirane
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TiraneEurope()
    {
        return static::instance('Europe/Tirane');
    }

    /**
     * Create an instance for Asia/Tokyo
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TokyoAsia()
    {
        return static::instance('Asia/Tokyo');
    }

    /**
     * Create an instance for Asia/Tomsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TomskAsia()
    {
        return static::instance('Asia/Tomsk');
    }

    /**
     * Create an instance for Pacific/Tongatapu
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function TongatapuPacific()
    {
        return static::instance('Pacific/Tongatapu');
    }

    /**
     * Create an instance for America/Toronto
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TorontoAmerica()
    {
        return static::instance('America/Toronto');
    }

    /**
     * Create an instance for America/Tortola
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TortolaAmerica()
    {
        return static::instance('America/Tortola');
    }

    /**
     * Create an instance for Africa/Tripoli
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TripoliAfrica()
    {
        return static::instance('Africa/Tripoli');
    }

    /**
     * Create an instance for Antarctica/Troll
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TrollAntarctica()
    {
        return static::instance('Antarctica/Troll');
    }

    /**
     * Create an instance for America/Argentina/Tucuman
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TucumanArgentinaAmerica()
    {
        return static::instance('America/Argentina/Tucuman');
    }

    /**
     * Create an instance for Africa/Tunis
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function TunisAfrica()
    {
        return static::instance('Africa/Tunis');
    }

    /**
     * Create an instance for UTC
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function UTC()
    {
        return static::instance('UTC');
    }

    /**
     * Create an instance for Asia/Ulaanbaatar
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function UlaanbaatarAsia()
    {
        return static::instance('Asia/Ulaanbaatar');
    }

    /**
     * Create an instance for Europe/Ulyanovsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function UlyanovskEurope()
    {
        return static::instance('Europe/Ulyanovsk');
    }

    /**
     * Create an instance for Asia/Urumqi
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function UrumqiAsia()
    {
        return static::instance('Asia/Urumqi');
    }

    /**
     * Create an instance for America/Argentina/Ushuaia
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function UshuaiaArgentinaAmerica()
    {
        return static::instance('America/Argentina/Ushuaia');
    }

    /**
     * Create an instance for Asia/Ust-Nera
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function UstNeraAsia()
    {
        return static::instance('Asia/Ust-Nera');
    }

    /**
     * Create an instance for Europe/Uzhgorod
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function UzhgorodEurope()
    {
        return static::instance('Europe/Uzhgorod');
    }

    /**
     * Create an instance for Europe/Vaduz
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VaduzEurope()
    {
        return static::instance('Europe/Vaduz');
    }

    /**
     * Create an instance for America/Vancouver
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VancouverAmerica()
    {
        return static::instance('America/Vancouver');
    }

    /**
     * Create an instance for Europe/Vatican
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VaticanEurope()
    {
        return static::instance('Europe/Vatican');
    }

    /**
     * Create an instance for America/Indiana/Vevay
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VevayIndianaAmerica()
    {
        return static::instance('America/Indiana/Vevay');
    }

    /**
     * Create an instance for Europe/Vienna
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ViennaEurope()
    {
        return static::instance('Europe/Vienna');
    }

    /**
     * Create an instance for Asia/Vientiane
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VientianeAsia()
    {
        return static::instance('Asia/Vientiane');
    }

    /**
     * Create an instance for Europe/Vilnius
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VilniusEurope()
    {
        return static::instance('Europe/Vilnius');
    }

    /**
     * Create an instance for America/Indiana/Vincennes
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function VincennesIndianaAmerica()
    {
        return static::instance('America/Indiana/Vincennes');
    }

    /**
     * Create an instance for Asia/Vladivostok
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VladivostokAsia()
    {
        return static::instance('Asia/Vladivostok');
    }

    /**
     * Create an instance for Europe/Volgograd
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function VolgogradEurope()
    {
        return static::instance('Europe/Volgograd');
    }

    /**
     * Create an instance for Antarctica/Vostok
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function VostokAntarctica()
    {
        return static::instance('Antarctica/Vostok');
    }

    /**
     * Create an instance for Pacific/Wake
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function WakePacific()
    {
        return static::instance('Pacific/Wake');
    }

    /**
     * Create an instance for Pacific/Wallis
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function WallisPacific()
    {
        return static::instance('Pacific/Wallis');
    }

    /**
     * Create an instance for Europe/Warsaw
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function WarsawEurope()
    {
        return static::instance('Europe/Warsaw');
    }

    /**
     * Create an instance for America/Whitehorse
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function WhitehorseAmerica()
    {
        return static::instance('America/Whitehorse');
    }

    /**
     * Create an instance for America/Indiana/Winamac
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function WinamacIndianaAmerica()
    {
        return static::instance('America/Indiana/Winamac');
    }

    /**
     * Create an instance for Africa/Windhoek
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function WindhoekAfrica()
    {
        return static::instance('Africa/Windhoek');
    }

    /**
     * Create an instance for America/Winnipeg
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function WinnipegAmerica()
    {
        return static::instance('America/Winnipeg');
    }

    /**
     * Create an instance for America/Yakutat
     *
     * @return self
     *
     * @noinspection PhpUnused
     * @noinspection SpellCheckingInspection
     */
    public static function YakutatAmerica()
    {
        return static::instance('America/Yakutat');
    }

    /**
     * Create an instance for Asia/Yakutsk
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function YakutskAsia()
    {
        return static::instance('Asia/Yakutsk');
    }

    /**
     * Create an instance for Asia/Yangon
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function YangonAsia()
    {
        return static::instance('Asia/Yangon');
    }

    /**
     * Create an instance for Asia/Yekaterinburg
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function YekaterinburgAsia()
    {
        return static::instance('Asia/Yekaterinburg');
    }

    /**
     * Create an instance for America/Yellowknife
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function YellowknifeAmerica()
    {
        return static::instance('America/Yellowknife');
    }

    /**
     * Create an instance for Asia/Yerevan
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function YerevanAsia()
    {
        return static::instance('Asia/Yerevan');
    }

    /**
     * Create an instance for Europe/Zagreb
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ZagrebEurope()
    {
        return static::instance('Europe/Zagreb');
    }

    /**
     * Create an instance for Europe/Zaporozhye
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ZaporozhyeEurope()
    {
        return static::instance('Europe/Zaporozhye');
    }

    /**
     * Create an instance for Europe/Zurich
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function ZurichEurope()
    {
        return static::instance('Europe/Zurich');
    }

    /**
     * Create an instance of this timezone class, using an instance of native NativeDateTimeZone
     *
     * @param NativeDateTimeZone $timezone
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function createFromInstance(NativeDateTimeZone $timezone)
    {
        if ($timezone instanceof DateTimeZone) {
            return $timezone->cloned();
        }
        return static::instance($timezone->getName());
    }

    /**
     * Create an instance of this timezone class
     *
     * @param string $timezone
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public static function instance($timezone = 'UTC')
    {
        return new static($timezone);
    }

    /**
     * Clone magic method
     *
     * @return void
     */
    public function __clone()
    {
        // noop
    }

    /**
     * Get a cloned copy of this timezone instance
     *
     * @return self
     *
     * @noinspection PhpUnused
     */
    public function cloned()
    {
        return clone $this;
    }

    /**
     * Is the other timezone the same offset?
     *
     * @param NativeDateTimeZone $timezone
     *
     * @return bool
     *
     * @noinspection PhpUnhandledExceptionInspection
     * @noinspection PhpDocMissingThrowsInspection
     */
    public function equal(NativeDateTimeZone $timezone)
    {
        $now = new NativeDateTime('now', new NativeDateTimeZone('UTC'));
        return $this->getOffset($now) === $timezone->getOffset($now);
    }

    /**
     * Get the country code if available
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getLocation()['country_code'];
    }

    /**
     * Get the latitude if available
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->getLocation()['latitude'];
    }

    /**
     * Get the longitude if available
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->getLocation()['longitude'];
    }

    /**
     * Returns all transitions for the timezone
     *
     * @param NativeDateTime|int $from
     * @param NativeDateTime|int $to
     *
     * @return Transition[]
     *
     * @link https://php.net/manual/en/datetimezone.gettransitions.php
     */
    public function getTransitions($from = null, $to = null)
    {
        if ($from === null || $to === null) {
            $transitions = parent::getTransitions();
        } else {
            $from = $from instanceof NativeDateTime ? $from->getTimestamp() : (int) $from;
            $to = $to instanceof NativeDateTime ? $to->getTimestamp() : (int) $to;
            $transitions = parent::getTransitions($from, $to);
        }
        return array_map(function ($transitionData) {
            return Transition::createFromArray($transitionData);
        }, $transitions);
    }

    /**
     * Is the other timezone the same timezone?
     *
     * @param NativeDateTimeZone $timezone
     *
     * @return bool
     */
    public function same(NativeDateTimeZone $timezone)
    {
        return $this->getName() === $timezone->getName();
    }
}
