<?php
/*   __________________________________________________
|    Copyright  http://JavaScriptSpellCheck.com    |
|         2004 to 2016-12-05 08:20:19              |
|                All Rights Reseved                |
|__________________________________________________|
*/
class PHPSpellCheck
{
 public $DictionaryPath = "\144\x69\x63\164\151\157\156\141\162\x69\145\163\57";
 public $SaveToCentralDictionary = "\x63\165\x73\x74\x6f\x6d\56\164\170\x74";
 private $G_DictArray = array();
 private $G_METArray = array();
 private $G_PosArray = array();
 private $G_ContextArray = array();
 public $IgnoreAllCaps = true;
 public $IgnoreNumeric = true;
 public $CaseSensitive = false;
 public $SuggestionTollerance = 1;
 public $LicenceKey = '';
 private $Suggestions_CACHE = array();
 private $unlocked = false;
 private $_unName = "\114\x49\126\x45\x53\120\x45\x4c\114";
 private $_phpName = "\120\110\120\x53\120\105\x4c\114";
 private $validReg = "\x31\62\x33\x34\65\66\x37\x38\71\60\121\127\x45\122\124\x59\125\120\114\x4b\112\x48\x47\x46\104\x41\x5a\130\103\126\116\115";
 private function randstr($JtEff)
 {
  goto uariP;
  UeE3h:
  $bXy3o .= substr($this->validReg, $HazxL, 1);
  goto NVIgM;
  kREst:
  lhU2d:
  goto u9bin;
  NVIgM:
  goto JLST6;
  goto kREst;
  pp10t:
  JLST6:
  goto xCkK3;
  xCkK3:
  if (!$JtEff--) {
   goto lhU2d;
  }
  goto p0Aqr;
  p0Aqr:
  $HazxL = rand(0, strlen($this->validReg) - 1);
  goto UeE3h;
  uariP:
  $bXy3o = '';
  goto pp10t;
  u9bin:
  return $bXy3o;
  goto jG7Q5;
  jG7Q5:
 }
 private function strInteger($lrK88)
 {
  goto mpNQz;
  B75cZ:
  VY3z8:
  goto fi_36;
  b3Pj0:
  goto uZ7jG;
  goto VJZwA;
  VRYqH:
  uZ7jG:
  goto QGzla;
  TlT_B:
  $fQEq0 = 0;
  goto VRYqH;
  QGzla:
  if (!($fQEq0 < strlen($lrK88))) {
   goto Yxaho;
  }
  goto aeCBT;
  k7_1K:
  return 1 + $ddW9T % 78;
  goto Nlvu8;
  VJZwA:
  Yxaho:
  goto k7_1K;
  aeCBT:
  $ddW9T += $fQEq0 + $fQEq0 % 5 + ord(substr($lrK88, $fQEq0, 1));
  goto B75cZ;
  mpNQz:
  $ddW9T = 0;
  goto TlT_B;
  fi_36:
  $fQEq0++;
  goto b3Pj0;
  Nlvu8:
 }
 public function didYouMean($bG1eF)
 {
  goto i9UVO;
  rqakB:
  $aeQ3R = $rzMzB[$fQEq0];
  goto pmSap;
  mM1VC:
  return $XavYW ? implode('', $rzMzB) : '';
  goto kYv1a;
  wF0cC:
  if (count($Slbvu) > 0) {
   goto ZP0uq;
  }
  goto LQEkL;
  DUSyy:
  ZP0uq:
  goto f22h0;
  a1nNR:
  goto q0PpE;
  goto DUSyy;
  CadxU:
  if (!($fQEq0 < count($rzMzB))) {
   goto QBL19;
  }
  goto rqakB;
  i9UVO:
  $rzMzB = $this->tokenizeString($bG1eF);
  goto UewxL;
  yfLuu:
  $rzMzB[$fQEq0] = '';
  goto a1nNR;
  LfaU1:
  $Slbvu = $this->Suggestions($aeQ3R);
  goto wF0cC;
  f22h0:
  $rzMzB[$fQEq0] = $Slbvu[0];
  goto xA76X;
  BRIOw:
  sOH3e:
  goto tJQ2W;
  yPwHo:
  N02NC:
  goto BRIOw;
  lb09Q:
  $fQEq0 = 0;
  goto YCpoj;
  YCpoj:
  oP0_d:
  goto CadxU;
  IybtQ:
  q0PpE:
  goto yPwHo;
  R8DsC:
  QBL19:
  goto mM1VC;
  OLXfY:
  if ($this->SpellCheckWord($aeQ3R)) {
   goto N02NC;
  }
  goto LfaU1;
  UewxL:
  $XavYW = false;
  goto lb09Q;
  Q7JE8:
  goto oP0_d;
  goto R8DsC;
  pmSap:
  if (!$this->isWord($aeQ3R)) {
   goto sOH3e;
  }
  goto OLXfY;
  tJQ2W:
  bgu37:
  goto F1Y35;
  LQEkL:
  $XavYW = true;
  goto yfLuu;
  xA76X:
  $XavYW = true;
  goto IybtQ;
  F1Y35:
  $fQEq0++;
  goto Q7JE8;
  kYv1a:
 }
 public function tokenizeString($bG1eF)
 {
  goto pNwfZ;
  lT15m:
  return $rzMzB;
  goto oqGLQ;
  pNwfZ:
  $S81v5 = "\x2f\50\134\x26\x61\x6d\160\x5c\73\x5b\141\x2d\172\x41\55\x5a\x30\x2d\71\x5d\173\61\54\66\175\x5c\x3b\51\x7c\x28\x5c\x26\133\141\55\172\x41\55\x5a\x30\55\71\x5d\x7b\x31\54\x36\175\x5c\73\x29\x7c\x20\x28\133\141\x2d\172\x41\x2d\132\x30\55\71\x2e\137\55\135\53\x40\x5b\141\x2d\172\101\55\x5a\x30\55\x39\56\55\135\53\134\56\133\141\55\x7a\x41\55\132\x5d\x7b\62\x2c\64\175\51\174\50\74\x5c\x2f\77\x5c\167\x2b\133\136\76\135\52\76\51\x7c\50\133\141\x2d\172\101\55\x5a\135\x7b\x32\54\65\175\x3a\134\x2f\x5c\57\x5b\x5e\x5c\163\135\x2a\51\x7c\50\x77\x77\167\134\56\x5b\136\x5c\x73\135\53\133\x5c\56\135\x5b\x61\55\172\x41\x2d\132\55\135\173\x32\x2c\64\175\x29\174\x28\x5b\134\x77\x27\140\302\xa5\303\255\303\xab\136\x78\x38\x31\x2d\377\135\53\x29\x7c\50\x5b\x5e\134\163\135\53\x5b\x5c\x2e\x5d\x5b\141\x2d\172\101\55\132\55\135\173\62\x2c\64\x7d\x29\174\50\x5b\x5c\167\x5d\53\x29\57\151";
  goto f_Nfg;
  f_Nfg:
  $rzMzB = preg_split($S81v5, $bG1eF, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
  goto lT15m;
  oqGLQ:
 }
 private function isWord($bG1eF)
 {
  $S81v5 = "\x2f\x5e\50\x5b\x5c\x77\x27\x60\302\xa5\xc3\255\xc3\xab\x5e\x78\x38\x31\x2d\xff\x5d\53\x29\x24\x24\57\151";
  return preg_match($S81v5, $bG1eF);
 }
 public function Suggestions($z17RV)
 {
  goto vjKuK;
  pGQnG:
  if (!array_key_exists($z17RV, $this->Suggestions_CACHE)) {
   goto HqE9o;
  }
  goto wUw9A;
  VdIz2:
  $rVAQD = $this->CorrectCase($z17RV, false);
  goto sM_vb;
  jwa1F:
  if (!array_key_exists(strtolower($z17RV), $this->GEnforced)) {
   goto RVB1Y;
  }
  goto AbTi3;
  wUw9A:
  HqE9o:
  goto VdIz2;
  ZENcS:
  Zp3WZ:
  goto caaYn;
  ymsEF:
  $c3IiN = $this->arrNearMiss($z17RV);
  goto L6CB8;
  vjKuK:
  if ($this->unlocked) {
   goto Wm_pY;
  }
  goto C5Tps;
  FXmFE:
  array_unshift($yLaUn, $this->GCommonTypos[strtolower($z17RV)]);
  goto x_nyq;
  EhOIj:
  Wm_pY:
  goto EHfHK;
  FGhkb:
  if (!((117 + $this->strInteger($z17RV)) % $this->Locael() == 1)) {
   goto oXTAM;
  }
  goto hgJTf;
  yz2Gj:
  RVB1Y:
  goto pGQnG;
  EHfHK:
  if ($this->unlocked) {
   goto Fofm2;
  }
  goto FGhkb;
  sjxwm:
  if (!array_key_exists(strtolower($z17RV), $this->GCommonTypos)) {
   goto pSISZ;
  }
  goto FXmFE;
  lZiRh:
  $yLaUn = $this->DistSort($z17RV, $yLaUn);
  goto sjxwm;
  auljS:
  Fofm2:
  goto jwa1F;
  cR3Vb:
  $c3IiN = array();
  goto ymsEF;
  hgJTf:
  return array(
      "\52\120\x48\x50\x20\x53\x70\x65\154\154\143\150\145\x63\x6b\x20\x54\162\151\x61\154\52",
      "\x50\x6c\x65\x61\x73\145\40\x72\x65\147\151\163\x74\x65\162\40\x6f\156\x6c\x69\x6e\x65",
      "\167\167\x77\x2e\x70\150\x70\163\160\x65\154\x6c\x63\x68\145\x63\153\56\143\157\155"
  );
  goto Y0QN9;
  L6CB8:
  $yLaUn = array_merge($vqvvC, $c3IiN);
  goto uycVz;
  C5Tps:
  $this->unlocked = $this->LoadPro($this->LicenceKey);
  goto EhOIj;
  jI7aw:
  $this->Suggestions_CACHE[$z17RV] = $yLaUn;
  goto i24U7;
  Y0QN9:
  oXTAM:
  goto auljS;
  OW2Dr:
  pSISZ:
  goto jI7aw;
  x_nyq:
  $yLaUn = array_unique($yLaUn);
  goto OW2Dr;
  AbTi3:
  return $this->GEnforced[strtolower($z17RV)];
  goto yz2Gj;
  sM_vb:
  if (!$rVAQD) {
   goto Zp3WZ;
  }
  goto JEVo5;
  JEVo5:
  return array(
      $rVAQD
  );
  goto ZENcS;
  i24U7:
  return $yLaUn;
  goto kNjaG;
  uycVz:
  $yLaUn = array_unique($yLaUn);
  goto lZiRh;
  caaYn:
  $vqvvC = $this->arrMetaPhones($z17RV);
  goto cR3Vb;
  kNjaG:
 }
 private function is_s_case($z0V4z)
 {
  return $z0V4z[0] === strtoupper($z0V4z[0]);
 }
 public function SetContext($rzMzB)
 {
  $this->G_ContextArray = $rzMzB;
 }
 public function CorrectCase($z17RV, $FgAKq)
 {
  goto DQOjx;
  rLFgs:
  $Zg8b7 = array_values($Zg8b7);
  goto Tq2ei;
  FYhJ3:
  $bXy3o = '';
  goto ulYaR;
  F3fAR:
  goto lugFh;
  goto G99Mr;
  T8yvA:
  $DzhrJ = $i4Ypu[$fQEq0];
  goto HJlJz;
  OBLV8:
  if (!array_key_exists($PZQ9A, $UVxL7[$DzhrJ])) {
   goto MKAe3;
  }
  goto Fz2PB;
  Tq2ei:
  $bXy3o = $Zg8b7[0];
  goto Z6ZhJ;
  DiCcC:
  $Zg8b7 = array_values($Zg8b7);
  goto lhTbI;
  JO_7R:
  mu6vt:
  goto ZH5Wv;
  ulYaR:
  $fQEq0 = 0;
  goto HTNiK;
  dvVht:
  $iBaoE = $this->DicIndex(strtolower($z17RV));
  goto Ag3w3;
  DQOjx:
  $PZQ9A = $this->DicIndex(strtoupper($z17RV));
  goto dvVht;
  GivH9:
  GpYQR:
  goto JO_7R;
  q7OLJ:
  yRQOj:
  goto BJg1l;
  TVXEH:
  if (!($bXy3o && $FgAKq)) {
   goto yRQOj;
  }
  goto x6B5V;
  Fz2PB:
  $Zg8b7 = $this->search_array_caseless($z17RV, $UVxL7[$DzhrJ][$PZQ9A]);
  goto MpXxS;
  Z6ZhJ:
  goto lugFh;
  goto GivH9;
  TXvYh:
  $i4Ypu = array_keys($UVxL7);
  goto FYhJ3;
  ZH5Wv:
  $fQEq0++;
  goto crr4I;
  HJlJz:
  if (!array_key_exists($iBaoE, $UVxL7[$DzhrJ])) {
   goto PeYHn;
  }
  goto YtM2M;
  G99Mr:
  guk_y:
  goto OBLV8;
  x6B5V:
  $bXy3o[0] = strtoupper($bXy3o[0]);
  goto q7OLJ;
  crr4I:
  goto BHMgu;
  goto gT4B8;
  HTNiK:
  BHMgu:
  goto nwOuU;
  kfd6e:
  PeYHn:
  goto wqVnd;
  MpXxS:
  MKAe3:
  goto BN1WR;
  Ag3w3:
  $UVxL7 =& $this->G_DictArray;
  goto TXvYh;
  lhTbI:
  $bXy3o = $Zg8b7[0];
  goto F3fAR;
  nwOuU:
  if (!($fQEq0 < count($i4Ypu))) {
   goto lugFh;
  }
  goto T8yvA;
  YtM2M:
  $Zg8b7 = $this->search_array_caseless($z17RV, $UVxL7[$DzhrJ][$iBaoE]);
  goto kfd6e;
  wqVnd:
  if (!$Zg8b7) {
   goto guk_y;
  }
  goto DiCcC;
  BJg1l:
  return $bXy3o;
  goto Dq00b;
  gT4B8:
  lugFh:
  goto TVXEH;
  BN1WR:
  if (!$Zg8b7) {
   goto GpYQR;
  }
  goto rLFgs;
  Dq00b:
 }
 private function clear_CACHE()
 {
  goto EsByg;
  sVcJI:
  $this->SimpleSpellCache_UNCASED = array();
  goto EjuK6;
  EsByg:
  unset($this->SimpleSpellCache_UNCASED, $this->SimpleSpellCache_CASED, $this->Suggestions_CACHE);
  goto sVcJI;
  kCte1:
  $this->Suggestions_CACHE = array();
  goto w0A1c;
  EjuK6:
  $this->SimpleSpellCache_CASED = array();
  goto kCte1;
  w0A1c:
 }
 public function LoadDictionary($JnOaj)
 {
  goto U60s8;
  O2V3y:
  rEMT0:
  goto MOdiH;
  TpGfB:
  dzJob:
  goto jsVHt;
  Nd2S7:
  return false;
  goto TpGfB;
  pIvBK:
  $EO2gH = $x2oOE . $JnOaj . "\x2e\144\151\x63";
  goto EBD2L;
  C9tn1:
  return $this->DecypherStrDict($JnOaj, $CWSLt);
  goto AQKM4;
  TxhE7:
  $x2oOE =& $this->DictionaryPath;
  goto zupr5;
  zupr5:
  if (!array_key_exists($JnOaj, $UVxL7)) {
   goto vz5g_;
  }
  goto lHH2h;
  jsVHt:
  $CWSLt = file_get_contents($EO2gH);
  goto C9tn1;
  MOdiH:
  vz5g_:
  goto pIvBK;
  U60s8:
  $UVxL7 =& $this->G_DictArray;
  goto TxhE7;
  EBD2L:
  if (file_exists($EO2gH)) {
   goto dzJob;
  }
  goto Nd2S7;
  lHH2h:
  if (!is_array($UVxL7[$JnOaj])) {
   goto rEMT0;
  }
  goto nVuZh;
  nVuZh:
  return true;
  goto O2V3y;
  AQKM4:
 }
 public function ListLiveDictionaries()
 {
  goto ksc44;
  h_Nkr:
  return $THC3N;
  goto DIGt_;
  mo3Wc:
  $THC3N = array_keys($UVxL7);
  goto k8VgQ;
  k8VgQ:
  sort($THC3N);
  goto h_Nkr;
  ksc44:
  $UVxL7 =& $this->G_DictArray;
  goto mo3Wc;
  DIGt_:
 }
 public function ListDictionaries()
 {
  goto vp7gv;
  remWN:
  closedir($kzLlw);
  goto w5bIp;
  JCza2:
  $kzLlw = opendir($x2oOE);
  goto t3ikA;
  eSiLT:
  $HsgIT =& $this->G_PosArray;
  goto JCza2;
  w5bIp:
  return $RJPTo;
  goto WtwCi;
  vp7gv:
  $x2oOE =& $this->DictionaryPath;
  goto qVuxr;
  t3ikA:
  $RJPTo = array();
  goto FgF4_;
  iM_jI:
  goto YqEZE;
  goto fhm_q;
  qVuxr:
  $rSn5k =& $this->G_METArray;
  goto eSiLT;
  fhm_q:
  fR0y9:
  goto remWN;
  XCIMX:
  u4W7B:
  goto iM_jI;
  IQKfj:
  if (!($juWqW = readdir($kzLlw))) {
   goto fR0y9;
  }
  goto pm5Ox;
  hjyzx:
  $RJPTo[] = substr($juWqW, 0, strlen($juWqW) - 4);
  goto XCIMX;
  pm5Ox:
  if (!(strpos($juWqW, "\56\x64\x69\x63") === strlen($juWqW) - 4)) {
   goto u4W7B;
  }
  goto hjyzx;
  FgF4_:
  YqEZE:
  goto IQKfj;
  WtwCi:
 }
 public function LoadUserDictionary($ZliKl)
 {
  $this->BuildDictionary($ZliKl, "\x53\120\105\114\x4c\x2e\104\111\103\124\x2e\125\x53\105\122");
 }
 public function LoadCustomDictionary($EO2gH)
 {
  goto LwJLJ;
  h5snm:
  if (file_exists($EO2gH)) {
   goto XauN4;
  }
  goto G8UbL;
  G8UbL:
  return false;
  goto L67l0;
  Cm7bV:
  $GD0GC = "\101\x50\x50\x5f\103\125\x53\x54\117\x4d\137" . substr(md5($EO2gH), 0, 5);
  goto S4ETR;
  rF6HS:
  $CWSLt = preg_replace("\x2f\x5c\x73\x2b\57", "\12", $CWSLt);
  goto ISF8m;
  LwJLJ:
  if (file_exists($EO2gH)) {
   goto msWYB;
  }
  goto O24nY;
  YahgI:
  msWYB:
  goto h5snm;
  L67l0:
  XauN4:
  goto Cm7bV;
  ISF8m:
  $this->BuildDictionary(explode("\xa", $CWSLt), $GD0GC);
  goto nMBG3;
  O24nY:
  $EO2gH = $this->DictionaryPath . $EO2gH;
  goto YahgI;
  S4ETR:
  $CWSLt = file_get_contents($EO2gH);
  goto rF6HS;
  nMBG3:
 }
 function LoadCommonTypos($EO2gH)
 {
  goto UnEYK;
  yIGTz:
  $bXy3o = explode("\12", trim($CWSLt));
  goto FP3oJ;
  OdBW2:
  $EO2gH = $this->DictionaryPath . $EO2gH;
  goto CHuGR;
  T1r_b:
  FtbGr:
  goto HEZOL;
  j3tNU:
  if (file_exists($EO2gH)) {
   goto FtbGr;
  }
  goto hH0yD;
  FP3oJ:
  $this->BuildCommonTypos($bXy3o);
  goto QA8qr;
  UnEYK:
  if (file_exists($EO2gH)) {
   goto Gs5sg;
  }
  goto OdBW2;
  HEZOL:
  $CWSLt = file_get_contents($EO2gH);
  goto yIGTz;
  CHuGR:
  Gs5sg:
  goto j3tNU;
  hH0yD:
  return false;
  goto T1r_b;
  QA8qr:
 }
 function LoadEnforcedCorrections($EO2gH)
 {
  goto y2oT1;
  F6Iue:
  $bXy3o = explode("\xa", trim($CWSLt));
  goto vQeM8;
  y2oT1:
  if (file_exists($EO2gH)) {
   goto ctaBo;
  }
  goto iDJud;
  vQaOz:
  return false;
  goto m1cfn;
  m1cfn:
  GhTe9:
  goto oyqdI;
  zx2Ww:
  ctaBo:
  goto MozQ2;
  MozQ2:
  if (file_exists($EO2gH)) {
   goto GhTe9;
  }
  goto vQaOz;
  iDJud:
  $EO2gH = $this->DictionaryPath . $EO2gH;
  goto zx2Ww;
  oyqdI:
  $CWSLt = file_get_contents($EO2gH);
  goto F6Iue;
  vQeM8:
  $this->BuildEnforcedCorrections($bXy3o);
  goto AuBNr;
  AuBNr:
 }
 public $GEnforced = array();
 private function BuildEnforcedCorrections($sMFL8)
 {
  foreach ($sMFL8 as $KquYn) {
   goto UqbZV;
   j4uU9:
   $GD0GC = trim($GD0GC);
   goto tCtpP;
   QaRnJ:
   $this->GBanned[strtolower($GD0GC)] = false;
   goto XR3JA;
   XwfmF:
   $fQEq0++;
   goto b2vz0;
   px7MR:
   $fQEq0 = 0;
   goto uMdiA;
   U2K61:
   cXPvQ:
   goto QaRnJ;
   tCtpP:
   $x5SHR = trim($x5SHR);
   goto O3keQ;
   O3keQ:
   $yp_K3 = explode("\x7c\x7c", $x5SHR);
   goto px7MR;
   b2vz0:
   goto gZV1w;
   goto U2K61;
   XR3JA:
   $this->GEnforced[strtolower($GD0GC)] = $yp_K3;
   goto HdxCw;
   UqbZV:
   list($GD0GC, $x5SHR) = explode("\x2d\55\76", $KquYn);
   goto j4uU9;
   R9jL1:
   Nuked:
   goto XwfmF;
   uMdiA:
   gZV1w:
   goto qSUrR;
   qSUrR:
   if (!($fQEq0 < count($yp_K3))) {
    goto cXPvQ;
   }
   goto HEYmZ;
   HEYmZ:
   $yp_K3[$fQEq0] = trim($yp_K3[$fQEq0]);
   goto R9jL1;
   HdxCw:
   CjovS:
   goto TGGui;
   TGGui:
  }
  sxKY5:
 }
 private $GCommonTypos = array();
 public function BuildCommonTypos($sMFL8)
 {
  foreach ($sMFL8 as $KquYn) {
   goto QqXtS;
   ncs45:
   Fv9IE:
   goto PhwSp;
   IE0y0:
   cH5k6:
   goto ncs45;
   QqXtS:
   $i8yRG = explode("\55\x2d\x3e", $KquYn);
   goto gUcWR;
   gUcWR:
   if (!(count($i8yRG) == 2)) {
    goto cH5k6;
   }
   goto rwb89;
   FGWFx:
   $GD0GC = trim($GD0GC);
   goto zVGYN;
   rwb89:
   list($GD0GC, $WrTRU) = $i8yRG;
   goto FGWFx;
   zVGYN:
   $WrTRU = trim($WrTRU);
   goto bUk2r;
   bUk2r:
   $this->GCommonTypos[strtolower($GD0GC)] = $WrTRU;
   goto IE0y0;
   PhwSp:
  }
  Qzs77:
 }
 public function LoadCustomBannedWords($EO2gH)
 {
  goto uIrNz;
  J8u9D:
  $CWSLt = preg_replace("\x2f\x5c\163\53\57", "\12", $CWSLt);
  goto BDAxE;
  Itqta:
  return false;
  goto lSWgh;
  uIrNz:
  if (file_exists($EO2gH)) {
   goto gOEYm;
  }
  goto tfjOT;
  BDAxE:
  $this->AddBannedWords(explode("\12", $CWSLt));
  goto XCPgm;
  lSWgh:
  XeeLo:
  goto FGQBW;
  FGQBW:
  $CWSLt = file_get_contents($EO2gH);
  goto J8u9D;
  cgMjF:
  if (file_exists($EO2gH)) {
   goto XeeLo;
  }
  goto Itqta;
  L0Iz4:
  gOEYm:
  goto cgMjF;
  tfjOT:
  $EO2gH = $this->DictionaryPath . $EO2gH;
  goto L0Iz4;
  XCPgm:
 }
 public $GBanned = array();
 private function hashstr($lrK88, $Ug9fw)
 {
  goto rpBhR;
  M5xgZ:
  B49jm:
  goto kTo1p;
  rpBhR:
  $bXy3o = '';
  goto CSjjl;
  dnmk5:
  return $bXy3o;
  goto tS5gj;
  DeXpb:
  $f0_IZ = substr($this->validReg, $ddW9T % strlen($this->validReg), 1);
  goto YCuIV;
  zx6Ky:
  $fQEq0 = 0;
  goto M5xgZ;
  ZTkZY:
  NubJM:
  goto v1Tr4;
  YCuIV:
  $bXy3o .= $f0_IZ;
  goto ZTkZY;
  TSuzX:
  mXwsw:
  goto dnmk5;
  kTo1p:
  if (!($fQEq0 < strlen($lrK88))) {
   goto mXwsw;
  }
  goto h2ebN;
  h2ebN:
  $ddW9T += $fQEq0 + $fQEq0 % 3 + ord(substr($lrK88, $fQEq0, 1));
  goto DeXpb;
  CSjjl:
  $ddW9T = $Ug9fw;
  goto zx6Ky;
  dDcV4:
  goto B49jm;
  goto TSuzX;
  v1Tr4:
  $fQEq0++;
  goto dDcV4;
  tS5gj:
 }
 public function AddBannedWords($sMFL8)
 {
  foreach ($sMFL8 as $GD0GC) {
   $this->GBanned[strtolower($GD0GC)] = false;
   Ovpxi:
  }
  gHWWG:
 }
 public function LoadCustomDictionaryFromURL($EO2gH)
 {
  goto U4r9G;
  FrJKh:
  $EO2gH = $this->filepath2url($EO2gH);
  goto lbWMI;
  YKY72:
  $GD0GC = "\x41\x50\120\x5f\103\125\x53\x54\x4f\115\x5f" . substr(md5($EO2gH), 0, 5);
  goto zCyNg;
  j8RIv:
  $this->BuildDictionary(explode("\12", $CWSLt), $GD0GC);
  goto DIeER;
  zCyNg:
  $CWSLt = file_get_contents($EO2gH);
  goto AQrOs;
  U4r9G:
  if (substr_count($EO2gH, "\x3a\x2f\57")) {
   goto dGECo;
  }
  goto s2lQ8;
  s2lQ8:
  if (file_exists($EO2gH)) {
   goto AlxKp;
  }
  goto xrdqh;
  lbWMI:
  dGECo:
  goto YKY72;
  AQrOs:
  $CWSLt = ereg_replace("\40\133\40\133\x3a\x73\160\141\x63\145\x3a\135\135\x2b", "\12", $CWSLt);
  goto j8RIv;
  xrdqh:
  return false;
  goto yaRId;
  yaRId:
  AlxKp:
  goto FrJKh;
  DIeER:
 }
 private static function cleanPunctuation($z17RV)
 {
  $VPFWn = array(
      "\x5c\x22",
      "\x27",
      "\55",
      "\55",
      "\x27",
      "\x7e",
      "\x60",
      "\47"
  );
  return str_replace($VPFWn, '', $z17RV);
 }
 function SafeCleanPunctuation($z17RV)
 {
  goto bxMqI;
  x1W6n:
  return str_replace($T_6Eo, $VPFWn, $z17RV);
  goto D8tWL;
  NEWdw:
  $VPFWn = array(
      "\x27",
      "\x27",
      "\40",
      "\40",
      "\47",
      "\55",
      "\47",
      "\x27"
  );
  goto x1W6n;
  bxMqI:
  $T_6Eo = array(
      "\134\42",
      "\x27",
      "\55",
      "\x2d",
      "\x27",
      "\x7e",
      "\x60",
      "\47"
  );
  goto NEWdw;
  D8tWL:
 }
 private static function stripVowels($z17RV)
 {
  goto Kke64;
  Kke64:
  $s55kV = explode("\54", "\141\54\x65\54\x69\54\x6f\54\165\x2c\x41\54\105\x2c\111\54\x4f\54\125");
  goto sYecE;
  sYecE:
  $VPFWn = '';
  goto Pyak9;
  Pyak9:
  return str_replace($s55kV, $VPFWn, $z17RV);
  goto QbMRG;
  QbMRG:
 }
 public function SpellCheckWord($z17RV)
 {
  goto NSx76;
  baaEA:
  zjfLu:
  goto YFyWl;
  NSx76:
  if (!($this->IgnoreAllCaps && strtoupper($z17RV) === $z17RV && strtoupper($z17RV) != strtolower($z17RV))) {
   goto MZsvP;
  }
  goto Vyfvq;
  YFyWl:
  $z17RV = $this->SafeCleanPunctuation($z17RV);
  goto JNWvS;
  X1lll:
  MZsvP:
  goto zhOep;
  Vyfvq:
  return true;
  goto X1lll;
  EkZXE:
  return true;
  goto baaEA;
  zhOep:
  if (!(strtoupper($z17RV) == strtolower($z17RV))) {
   goto zjfLu;
  }
  goto EkZXE;
  Me94H:
  $T00HN = strtoupper($z17RV);
  goto sAJK7;
  sAJK7:
  if (!($T00HN == $z17RV && $this->SimpleSpell(strtolower($z17RV), true))) {
   goto AHjOG;
  }
  goto gkzvL;
  Dja__:
  return $this->SimpleSpell($z17RV, !$this->CaseSensitive) || $this->SimpleSpell($K9Czk, !$this->CaseSensitive);
  goto zL1Tq;
  xppyl:
  AHjOG:
  goto Dja__;
  gkzvL:
  return true;
  goto xppyl;
  JNWvS:
  $K9Czk = $this->DeCapitalise($z17RV);
  goto Me94H;
  zL1Tq:
 }
 public function ErrorTypeWord($z17RV)
 {
  goto I41Ul;
  Uh1UP:
  if (!$this->SimpleSpell($z17RV, true)) {
   goto k42Mj;
  }
  goto OZ6B6;
  mmx_G:
  return "\x53";
  goto mc7VQ;
  gx1oV:
  $this->unlocked = $this->LoadPro($this->LicenceKey);
  goto td5sC;
  LL6Ip:
  B2wSe:
  goto wIT32;
  OZ6B6:
  return "\x43";
  goto IK1Ft;
  td5sC:
  HCewB:
  goto UBI3K;
  VYjnM:
  return "\105";
  goto Tw47s;
  UBI3K:
  if (!array_key_exists(strtolower($z17RV), $this->GEnforced)) {
   goto cKfBh;
  }
  goto VYjnM;
  NW8px:
  return "\102";
  goto LL6Ip;
  NGH9h:
  if (!(($this->strInteger($z17RV) + 117) % $this->Locael() == 1)) {
   goto cozgo;
  }
  goto v2jmH;
  Tw47s:
  cKfBh:
  goto GL7Re;
  wIT32:
  if ($this->unlocked) {
   goto ZsUdL;
  }
  goto NGH9h;
  I41Ul:
  if ($this->unlocked) {
   goto HCewB;
  }
  goto gx1oV;
  v2jmH:
  return "\x58";
  goto BPnZx;
  BPnZx:
  cozgo:
  goto GKEHG;
  GKEHG:
  ZsUdL:
  goto Uh1UP;
  IK1Ft:
  k42Mj:
  goto mmx_G;
  GL7Re:
  if (!array_key_exists(strtolower($z17RV), $this->GBanned)) {
   goto B2wSe;
  }
  goto NW8px;
  mc7VQ:
 }
 private function Locael()
 {
  goto DPy_v;
  DPy_v:
  if (!($_SERVER["\x48\124\x54\x50\137\110\x4f\123\x54"] == "\x6c\x6f\x63\x61\154\150\157\163\164" || $_SERVER["\110\124\x54\x50\x5f\x48\x4f\x53\124"] == "\x31\62\67\x2e\x30\56\60\x2e\61")) {
   goto WGuoE;
  }
  goto cZesF;
  IPbtb:
  return 11;
  goto nchAA;
  cZesF:
  return 22;
  goto VBP0f;
  VBP0f:
  WGuoE:
  goto IPbtb;
  nchAA:
 }
 public function SpellCheckAndSpaces($lrK88, $APQtA)
 {
  goto atMT5;
  SK2Sf:
  Hv1MY:
  goto epoqu;
  FI6eo:
  return $this->SimpleSpell($lrK88, $APQtA);
  goto Tze37;
  III3W:
  $y9wV7 = str_word_count($lrK88, 1, "\xc2\xbf\xc2\xa1\302\xac\342\210\x9a\306\x92\342\211\x88\xe2\200\241\302\xb7\xe2\200\232\xe2\x80\x9e\xe2\x80\xb0\303\202\302\273\342\x80\246\302\240\303\200\xc3\213\xc3\210\303\x8d\303\216\xe2\200\234\342\200\x9d\xe2\x80\x98\xe2\200\x99\xc3\xb7\303\233\xc3\x99\304\261\313\206\302\257\305\xb8\342\x81\x84\342\x82\xac\342\200\xb9\xcb\230\xcb\x99\xcb\232\302\270\303\xbc\342\200\xba\313\x9d\313\x87\xc3\245\73\xc3\xba\73\xe2\210\206\xc3\x8a\xef\254\x82\303\244\303\266\303\266\xe2\x80\x94\xc3\x92\xef\243\xbf\xe2\x80\223\xef\xac\x81\313\x9b\xcb\x87\47");
  goto J59Az;
  Re94H:
  return true;
  goto ZbiR7;
  fLKZX:
  Cw6TU:
  goto Re94H;
  Tze37:
  WppjO:
  goto III3W;
  epoqu:
  if (!(substr_count($lrK88, "\x20") == 0)) {
   goto WppjO;
  }
  goto FI6eo;
  JlhR_:
  $this->unlocked = $this->LoadPro($this->LicenceKey);
  goto SK2Sf;
  atMT5:
  if ($this->unlocked) {
   goto Hv1MY;
  }
  goto JlhR_;
  J59Az:
  foreach ($y9wV7 as $z17RV) {
   goto EJ2Z5;
   OZG7S:
   DDpvv:
   goto G4ckF;
   z2JN9:
   LTfZJ:
   goto ahvlJ;
   FXIFz:
   return false;
   goto OZG7S;
   jYxLH:
   return false;
   goto bnvz_;
   EJ2Z5:
   if (!(strlen($z17RV) == 0)) {
    goto DDpvv;
   }
   goto FXIFz;
   bnvz_:
   BEgAX:
   goto z2JN9;
   G4ckF:
   if ($this->SimpleSpell($z17RV, $APQtA)) {
    goto BEgAX;
   }
   goto jYxLH;
   ahvlJ:
  }
  goto fLKZX;
  ZbiR7:
 }
 private function arrNearMiss($z0V4z)
 {
  goto DDKmN;
  pqdpE:
  iEkgy:
  goto MqIUR;
  xdUVT:
  $d6yaU = array_unique($d6yaU);
  goto yb7Xk;
  Yb4cb:
  $WcwSv = array(
      $z0V4z,
      $this->DeCapitalise($z0V4z)
  );
  goto zByMO;
  Eblfg:
  sort($d6yaU);
  goto xdUVT;
  f8N44:
  mrQVx:
  goto NfsaG;
  rlKvD:
  $WcwSv = array();
  goto ErH0z;
  MqIUR:
  if (!($yxL0a < count($d6yaU))) {
   goto GHPJ8;
  }
  goto aoBa1;
  zAecn:
  goto iEkgy;
  goto gybRD;
  zDUZ0:
  goto q4aBy;
  goto AYPdX;
  SbZ80:
  $yxL0a = 0;
  goto pqdpE;
  yb7Xk:
  sort($d6yaU);
  goto SbZ80;
  zByMO:
  q4aBy:
  goto xceO9;
  eUteN:
  $yxL0a++;
  goto zAecn;
  ErH0z:
  if ($z0V4z != $this->DeCapitalise($z0V4z)) {
   goto F_HFC;
  }
  goto BG43e;
  DDKmN:
  $d6yaU = array();
  goto L5XhU;
  u5ovo:
  $Lwlnx[] = $d6yaU[$yxL0a];
  goto N8Go2;
  znGHx:
  return $Lwlnx;
  goto oGXql;
  L5XhU:
  $QM01w = "\141\x62\143\x64\x65\146\147\150\151\152\153\x6c\x6d\x6e\x6f\x70\161\x72\163\x74\x75\x76\167\x78\171\x7a\40\x27\101\x42\103\104\105\x46\x47\110\x49\112\x4b\114\115\116\117\x50\121\x52\123\124\x55\x56\127\130\x59\x5a";
  goto rlKvD;
  BG43e:
  $WcwSv = array(
      $z0V4z . ''
  );
  goto zDUZ0;
  NfsaG:
  $Lwlnx = array();
  goto Eblfg;
  N8Go2:
  DkiIW:
  goto Wndtd;
  gybRD:
  GHPJ8:
  goto znGHx;
  aoBa1:
  if (!$this->SpellCheckAndSpaces($d6yaU[$yxL0a], false)) {
   goto DkiIW;
  }
  goto u5ovo;
  Wndtd:
  EE5cT:
  goto eUteN;
  xceO9:
  foreach ($WcwSv as $z17RV) {
   goto WNg7H;
   CDUWk:
   $fQEq0 = 0;
   goto KKCKt;
   C2Fbi:
   $d6yaU[] = trim($mPS8E);
   goto HFcHi;
   NXahd:
   $yJMTj++;
   goto s2Ltb;
   X_rjI:
   $mPS8E = $z17RV;
   goto rD0nh;
   NAoqN:
   $mPS8E[$yxL0a] = "\x5e";
   goto wUdgi;
   Syuhc:
   $d6yaU[] = trim($mPS8E);
   goto tbPd0;
   lb733:
   QTSvs:
   goto xqi3j;
   AEDhy:
   hJ_Ji:
   goto lb733;
   QECPY:
   Qqymo:
   goto XAPuU;
   E4CUN:
   if (!($yxL0a > 0)) {
    goto heHST;
   }
   goto NlDlb;
   TYhEj:
   Z0OnS:
   goto TH688;
   BYhDC:
   $oZ_rk = $QM01w[$fQEq0];
   goto oHp8p;
   s2Ltb:
   goto Qqymo;
   goto WwNkj;
   UtEfD:
   $mPS8E = $z17RV;
   goto NAoqN;
   qMo2q:
   vBmHI:
   goto NXahd;
   K4PYW:
   $d6yaU[] = trim($mPS8E);
   goto iJa8V;
   bgDRO:
   EjO8E:
   goto gBfy1;
   RRxXJ:
   if (!($yxL0a == 0 && $oZ_rk !== "\x20" && $oZ_rk !== "\47")) {
    goto hJ_Ji;
   }
   goto FV271;
   Ojpck:
   goto yE9wu;
   goto MGR7x;
   K2zkl:
   goto EjO8E;
   goto Kevem;
   wNeHu:
   $mPS8E[$yxL0a - 1] = $FpP8G[$yxL0a];
   goto K4PYW;
   gBfy1:
   if (!($yxL0a < strlen($z17RV))) {
    goto Q4W78;
   }
   goto CDUWk;
   IPk7c:
   kXgbm:
   goto RRxXJ;
   tbPd0:
   if (!($oZ_rk == "\40" && $yxL0a > 0)) {
    goto mZkHa;
   }
   goto t1jVE;
   ONK96:
   $FpP8G = $mPS8E;
   goto Gsghu;
   KKCKt:
   yE9wu:
   goto k3N9P;
   wUdgi:
   $d6yaU[] = trim(str_replace("\136", '', $mPS8E));
   goto XiK2Z;
   Gsghu:
   $mPS8E[$yxL0a] = $FpP8G[$yxL0a - 1];
   goto wNeHu;
   FV271:
   $mPS8E = $z17RV;
   goto uYcfY;
   HFcHi:
   $mPS8E = substr($z17RV, 0, $yxL0a) . $oZ_rk . substr($z17RV, $yxL0a);
   goto Syuhc;
   k3N9P:
   if (!($fQEq0 < strlen($QM01w))) {
    goto EB06N;
   }
   goto BYhDC;
   oHp8p:
   if (!($yxL0a == 0 || $fQEq0 < 28)) {
    goto kXgbm;
   }
   goto X_rjI;
   MGR7x:
   EB06N:
   goto E4CUN;
   WQmjm:
   $d6yaU[] = trim(substr($mPS8E, 0, $yJMTj) . "\x20" . substr($mPS8E, $yJMTj));
   goto qMo2q;
   Kevem:
   Q4W78:
   goto TYhEj;
   WwNkj:
   pQRS6:
   goto z5dqc;
   NK0w5:
   $d6yaU[] = trim($mPS8E);
   goto AEDhy;
   gtum1:
   $yxL0a++;
   goto K2zkl;
   NlDlb:
   $mPS8E = $z17RV;
   goto ONK96;
   xqi3j:
   $fQEq0++;
   goto Ojpck;
   XiK2Z:
   tGkG5:
   goto gtum1;
   iJa8V:
   heHST:
   goto UtEfD;
   WNg7H:
   $yxL0a = 0;
   goto bgDRO;
   rD0nh:
   $mPS8E[$yxL0a] = $oZ_rk;
   goto C2Fbi;
   uYcfY:
   $mPS8E = $oZ_rk . $mPS8E;
   goto NK0w5;
   XAPuU:
   if (!($yJMTj < strlen($z17RV) - 1)) {
    goto pQRS6;
   }
   goto WQmjm;
   z5dqc:
   mZkHa:
   goto IPk7c;
   t1jVE:
   $yJMTj = $yxL0a + 2;
   goto QECPY;
   TH688:
  }
  goto f8N44;
  AYPdX:
  F_HFC:
  goto Yb4cb;
  oGXql:
 }
 private function arrMetaPhones($z17RV)
 {
  goto C1qsn;
  bx72A:
  goto W9dhb;
  goto pT9ol;
  BIYiL:
  $KDYA8 = $this->DicIndex($gH1BK);
  goto apIPl;
  Vs9Hu:
  $DzhrJ = $i4Ypu[$fQEq0];
  goto EhnzG;
  C1qsn:
  $UVxL7 =& $this->G_DictArray;
  goto P90Bt;
  oGs9f:
  $gH1BK = $this->PhoneticCode($z17RV);
  goto BIYiL;
  apIPl:
  $d6yaU = array();
  goto Qk_9s;
  uPFwb:
  return $d6yaU;
  goto xdIlv;
  iR7lZ:
  foreach ($TazV7 as $tzHeh) {
   goto ZZIPT;
   mib31:
   $HKRZl = (int) substr($tzHeh, 1);
   goto yvdp0;
   yvdp0:
   $WGHY4 = $UVxL7[$DzhrJ][$xFIb5][$HKRZl];
   goto YOooP;
   ZZIPT:
   $xFIb5 = $this->DicIndex($tzHeh[0]);
   goto mib31;
   YOooP:
   $d6yaU[] = $WGHY4;
   goto pV8dy;
   pV8dy:
   DFNns:
   goto cS3ey;
   cS3ey:
  }
  goto esfvP;
  fWyFU:
  W9dhb:
  goto sxWA4;
  qGyD8:
  lAkl_:
  goto FBCGK;
  esfvP:
  TAs6F:
  goto qGyD8;
  BxBfQ:
  $fQEq0 = 0;
  goto fWyFU;
  Qk_9s:
  $i4Ypu = array_keys($UVxL7);
  goto BxBfQ;
  QctEP:
  Iq17l:
  goto HEU4f;
  kDu89:
  sort($d6yaU);
  goto uPFwb;
  EhnzG:
  if (!array_key_exists($KDYA8, $rSn5k[$DzhrJ])) {
   goto LwW07;
  }
  goto wCJX3;
  tU_LF:
  $TazV7 = explode("\x7c", $rSn5k[$DzhrJ][$KDYA8][$gH1BK]);
  goto iR7lZ;
  pT9ol:
  rrrWn:
  goto ObkiO;
  ObkiO:
  $d6yaU = array_unique($d6yaU);
  goto kDu89;
  P90Bt:
  $rSn5k =& $this->G_METArray;
  goto oGs9f;
  sxWA4:
  if (!($fQEq0 < count($i4Ypu))) {
   goto rrrWn;
  }
  goto Vs9Hu;
  FBCGK:
  LwW07:
  goto QctEP;
  HEU4f:
  $fQEq0++;
  goto bx72A;
  wCJX3:
  if (!array_key_exists($gH1BK, $rSn5k[$DzhrJ][$KDYA8])) {
   goto lAkl_;
  }
  goto tU_LF;
  xdIlv:
 }
 private function DistSort($z17RV, $D6c2_)
 {
  goto aFMDt;
  iqp1u:
  C4_6q:
  goto QmHld;
  Qsrt0:
  return $VbpkH;
  goto NoTWV;
  SiFqz:
  i8bdF:
  goto MjgbE;
  o0F2c:
  QF_JH:
  goto g0uHl;
  MjgbE:
  if (!($fQEq0 < count($AQyoP))) {
   goto Hr2BP;
  }
  goto kdlAk;
  pDT69:
  $AQyoP = array();
  goto IYL_v;
  Cl3MH:
  goto i8bdF;
  goto mi6Jj;
  JjaH8:
  foreach ($D6c2_ as $VOcW4) {
   goto oXXq_;
   F_OWj:
   if (!($l4v7O < 5)) {
    goto cz1LP;
   }
   goto fnecU;
   w60_V:
   foreach ($EzkRt as $aJUtv) {
    goto SGWQi;
    lYbN6:
    $l4v7O -= 0.3;
    goto kzSTi;
    ptJ06:
    if (!substr_count($GPLlO, $VOcW4)) {
     goto dNPfs;
    }
    goto Yi7cV;
    YjAX1:
    $GPLlO = "\44" . $HsgIT[$aJUtv];
    goto CaJyP;
    SGWQi:
    if (!(array_key_exists($aJUtv, $HsgIT) && $HsgIT[$aJUtv] != '')) {
     goto c1ssx;
    }
    goto YjAX1;
    g7g5z:
    PyIVE:
    goto lYbN6;
    rw4qV:
    if (strpos($GPLlO, "\44\x2b\75") === 0) {
     goto PyIVE;
    }
    goto maZ7Q;
    CaJyP:
    $gH1BK = 0;
    goto ptJ06;
    xOmgT:
    bcGSv:
    goto gFVjL;
    r8d3d:
    Z6D0j:
    goto bcoI2;
    Yi7cV:
    $gH1BK = strpos($GPLlO, strtoupper("\x24" . $VOcW4 . "\x24"));
    goto xhDcH;
    icsbG:
    $l4v7O -= $Zg8b7;
    goto UAnHh;
    QhlYF:
    LdI_t:
    goto Z5hg5;
    GnbRm:
    goto Mn0pe;
    goto g7g5z;
    gFVjL:
    c1ssx:
    goto r8d3d;
    HVHOm:
    if (!($gH1BK > 0)) {
     goto bcGSv;
    }
    goto rw4qV;
    d0p71:
    $Zg8b7 = pow(($yxL0a - $gH1BK) / $yxL0a, 2) * 0.6;
    goto icsbG;
    UAnHh:
    Mn0pe:
    goto xOmgT;
    kzSTi:
    goto Mn0pe;
    goto QhlYF;
    maZ7Q:
    if ($gH1BK) {
     goto LdI_t;
    }
    goto GnbRm;
    xhDcH:
    dNPfs:
    goto HVHOm;
    Z5hg5:
    $yxL0a = strlen($GPLlO);
    goto d0p71;
    bcoI2:
   }
   goto BvlpF;
   geXFk:
   q9UVQ:
   goto IYXPE;
   z4tOa:
   if (!($l4v7O < 3.5)) {
    goto uXnhf;
   }
   goto w60_V;
   WrCya:
   $l4v7O -= pow($Tr9Q5, 0.4) * 0.75;
   goto OXJey;
   OXJey:
   NeC6H:
   goto geXFk;
   E0Hw4:
   if (!count($this->G_ContextArray)) {
    goto QxdFO;
   }
   goto ODnz1;
   UtDmy:
   uXnhf:
   goto EKtzN;
   EKtzN:
   cz1LP:
   goto ulADz;
   fnecU:
   $l4v7O = $this->psuedolevenshtein($z17RV, $VOcW4);
   goto z4tOa;
   ulADz:
   $AQyoP[$VOcW4] = $l4v7O;
   goto cbuMP;
   cbuMP:
   hiZB0:
   goto xxMUG;
   BvlpF:
   aS9wp:
   goto E0Hw4;
   oXXq_:
   if (array_key_exists(strtolower($VOcW4), $this->GBanned)) {
    goto hiZB0;
   }
   goto Jx0z5;
   xxMUG:
   QDl1a:
   goto ERdbV;
   ODnz1:
   if (!in_array($VOcW4, $this->G_ContextArray, true)) {
    goto q9UVQ;
   }
   goto xHEyI;
   IYXPE:
   QxdFO:
   goto UtDmy;
   xHEyI:
   $Tr9Q5 = count(array_keys($this->G_ContextArray, $VOcW4, true));
   goto s7CES;
   Jx0z5:
   $l4v7O = levenshtein($z17RV, $VOcW4);
   goto F_OWj;
   s7CES:
   if (!$Tr9Q5) {
    goto NeC6H;
   }
   goto WrCya;
   ERdbV:
  }
  goto iqp1u;
  IYL_v:
  $EzkRt = $this->ListLiveDictionaries();
  goto JjaH8;
  Cxsua:
  $fQEq0 = 1000000;
  goto tRVj0;
  T9dYl:
  $sExBO = sqrt(strlen($z17RV) - 1) + $this->SuggestionTollerance;
  goto jmHyQ;
  aFMDt:
  $HsgIT =& $this->G_PosArray;
  goto TW6vF;
  mi6Jj:
  Hr2BP:
  goto Qsrt0;
  CXFji:
  $VbpkH = array_slice($VbpkH, 0, $fQEq0);
  goto Cxsua;
  g0uHl:
  $fQEq0++;
  goto Cl3MH;
  x4dTb:
  $VaNp9 = 1;
  goto Dlzco;
  kdlAk:
  if (!($AQyoP[$VbpkH[$fQEq0]] > $n6rBj || $fQEq0 > $sExBO)) {
   goto sQn56;
  }
  goto CXFji;
  E3RPz:
  $VaNp9 = 0.4;
  goto dBhlM;
  tRVj0:
  sQn56:
  goto o0F2c;
  QmHld:
  asort($AQyoP);
  goto x4dTb;
  TW6vF:
  sort($D6c2_);
  goto pDT69;
  dBhlM:
  EZjz4:
  goto TYLAi;
  jmHyQ:
  $fQEq0 = 0;
  goto SiFqz;
  g1h1p:
  if (!($VaNp9 < 0.4)) {
   goto EZjz4;
  }
  goto E3RPz;
  Dlzco:
  try {
   $VbpkH = array_keys($AQyoP);
   $VaNp9 = $AQyoP[$VbpkH[0]];
  }
  catch (Exception $i4HlU) {
  }
  goto g1h1p;
  TYLAi:
  $n6rBj = sqrt($VaNp9) + $this->SuggestionTollerance + 0.5;
  goto T9dYl;
  NoTWV:
 }
 private static function cleanForeign($z17RV)
 {
  goto BFrml;
  eKcuB:
  $VPFWn = explode("\x2c", "\131\54\131\x2c\x79\54\171\x2c\x41\54\x41\x2c\x41\54\x41\54\x41\x2c\x41\54\x61\54\x61\54\141\54\x61\54\x61\54\141\54\105\x2c\x45\x2c\x45\54\x45\x2c\145\x2c\145\x2c\x65\54\x65\x2c\x49\54\111\54\111\54\111\54\x69\x2c\x69\x2c\x69\54\x69\54\54\x4f\54\117\54\117\x2c\117\54\117\54\x6f\x2c\x6f\54\x6f\x2c\x6f\x2c\157\54\x55\54\x55\x2c\125\54\125\54\x75\54\x75\x2c\x75\x2c\x75\54\x4f\105\54\x6f\145\x2c\101\105\54\141\x65\54\163\163\x2c\x53\x48\54\163\x68\x2c\x53\x2c\x4e\x2c\x6e\54\x74\150\54\164\150\x2c\x54\x48\x2c\x54\110");
  goto umbJ2;
  BFrml:
  $vVL7i = explode("\54", "\xc5\270\54\303\x9d\54\xc3\xbd\x2c\303\xbf\54\303\x80\54\xc3\201\x2c\xc3\202\x2c\xc3\203\54\xc3\x84\x2c\303\205\54\xc3\240\x2c\303\xa1\x2c\xc3\242\54\303\243\54\303\244\54\xc3\xa5\x2c\xc3\x88\54\303\x89\x2c\303\212\54\303\213\x2c\303\250\x2c\xc3\251\x2c\xc3\252\54\303\253\54\303\214\x2c\xc3\x8d\54\xc3\216\54\xc3\x8f\x2c\xc3\254\54\xc3\xad\54\xc3\256\x2c\xc3\257\54\xc3\222\x2c\303\223\x2c\xc3\x94\x2c\303\x95\54\xc3\x96\54\303\263\54\xc3\264\x2c\xc3\xb5\x2c\303\xb6\x2c\xc3\xb8\54\303\231\54\303\232\x2c\xc3\x9b\54\303\234\54\303\271\54\303\272\x2c\303\xbb\54\xc3\xbc\54\305\x92\x2c\305\223\x2c\xc3\x86\54\303\xa6\54\303\237\54\305\240\x2c\xc5\xa1\54\xc5\xbd\54\xc3\221\54\xc3\261\54\303\260\x2c\303\220\54\303\236\x2c\303\276");
  goto eKcuB;
  umbJ2:
  return str_replace($vVL7i, $VPFWn, $z17RV);
  goto f09na;
  f09na:
 }
 public function LoadPro($DAwCd)
 {
  goto uqsQ0;
  cW3Rc:
  $Ler6g = $Ih8gl[2];
  goto SY2ej;
  PHK6j:
  return $DAwCd == $this->_phpName || $DAwCd == $this->_unName;
  goto yDdrg;
  IMH5Z:
  if (!($uy2Gc !== $this->hashstr($Ler6g, $y3IlN))) {
   goto A0A0j;
  }
  goto EUt1o;
  W_Ifr:
  if (!($j0DOY != $this->hashstr(substr($DAwCd, 0, 5), $SM4gH % $y3IlN))) {
   goto C3Hcp;
  }
  goto QzDMT;
  TKDmh:
  $j0DOY = $Ih8gl[5];
  goto W_Ifr;
  Bb2BH:
  C3Hcp:
  goto PHK6j;
  V9M2f:
  return false;
  goto i8YwX;
  sGUR4:
  return false;
  goto a1Lf6;
  Kq8rW:
  A0A0j:
  goto s2Q5J;
  EUt1o:
  return false;
  goto Kq8rW;
  uqsQ0:
  $Ih8gl = explode("\x2d", $DAwCd . '');
  goto ATx_K;
  urAfN:
  $SM4gH = (int) $this->strInteger($uy2Gc . $lrK88);
  goto v_W9A;
  v_W9A:
  $fcIHw = $Ih8gl[1];
  goto ZyNlu;
  ATx_K:
  if (!(count($Ih8gl) !== 6)) {
   goto KqcQL;
  }
  goto V9M2f;
  s2Q5J:
  $lrK88 = $Ih8gl[4];
  goto urAfN;
  QzDMT:
  return false;
  goto Bb2BH;
  a1Lf6:
  rqs9R:
  goto DshFW;
  ZyNlu:
  if (!($fcIHw != $this->hashstr($lrK88 . "\117\x31", $SM4gH))) {
   goto rqs9R;
  }
  goto sGUR4;
  K7jof:
  $uy2Gc = $Ih8gl[3];
  goto IMH5Z;
  i8YwX:
  KqcQL:
  goto cW3Rc;
  SY2ej:
  $y3IlN = (int) $this->strInteger($Ler6g);
  goto K7jof;
  DshFW:
  $DAwCd = $Ih8gl[0];
  goto TKDmh;
  yDdrg:
 }
 function psuedolevenshtein($z17RV, $ZUhXp)
 {
  goto MO25E;
  dzZyj:
  $OIlsi += 0.4;
  goto v1Gtw;
  Xzbb9:
  $OIlsi -= 0.4;
  goto AAIeJ;
  ocKT8:
  if (!($z0V4z == $TuV5O)) {
   goto LH0YK;
  }
  goto leUzt;
  quEji:
  $TuV5O = $this->cleanPunctuation($TuV5O);
  goto E3RyW;
  g7Czw:
  if (!($z0V4z == $TuV5O)) {
   goto cMQwz;
  }
  goto xwVqg;
  GUhoU:
  $OIlsi += count($L_ENw) - 1;
  goto PQg7y;
  H67ah:
  cMQwz:
  goto LDkOD;
  LDkOD:
  if (!($TuV5O == $XbmiR)) {
   goto Tn8iM;
  }
  goto dzZyj;
  MO25E:
  $e1_xK = (strtolower($z17RV[0]) == $z17RV[0]) != (strtolower($ZUhXp[0]) == $ZUhXp[0]);
  goto xpYKK;
  bAi0j:
  if (!($JtEff > 3)) {
   goto wQ6sT;
  }
  goto YASC0;
  x51Qe:
  NNvf2:
  goto YTFCp;
  O16_E:
  LH0YK:
  goto vVhl3;
  JG0Q5:
  $OIlsi -= -0.8;
  goto xIJRg;
  scuSR:
  if (!$lo_dN) {
   goto jXSJm;
  }
  goto i8RS2;
  RKtsz:
  $TuV5O = str_replace("\x70\x68", "\x66", $TuV5O);
  goto g7Czw;
  vVhl3:
  $z0V4z = $this->cleanPunctuation($z0V4z);
  goto quEji;
  F37JL:
  if (!(implode('', $N4bjQ) == implode('', $C3ofE))) {
   goto c3TU0;
  }
  goto sr3gf;
  A3Oor:
  $C3ofE = array_unique($C3ofE);
  goto H6h_2;
  YTFCp:
  $z0V4z = str_replace("\x20", '', $z0V4z);
  goto V3grt;
  oui20:
  if (!($LVG7Q == $XbmiR)) {
   goto YFm7j;
  }
  goto JG0Q5;
  ZG11k:
  $OIlsi = levenshtein($z0V4z, $TuV5O);
  goto a_ERL;
  iHK9I:
  $TuV5O = $this->cleanForeign($TuV5O);
  goto OQ0Xp;
  ouWVj:
  $JtEff = strlen($TuV5O);
  goto y42AC;
  AAIeJ:
  z238e:
  goto I3kvh;
  R_wa3:
  $lo_dN = strtolower($z0V4z[strlen($z0V4z) - 1]) === "\163";
  goto scuSR;
  aHcD4:
  wQ6sT:
  goto BW5Gd;
  RgIKY:
  $LVG7Q = $this->stripVowels($z0V4z);
  goto cJh53;
  DVajk:
  if (!$r67Sz) {
   goto z238e;
  }
  goto Xzbb9;
  BIX_F:
  ILaGx:
  goto xQzNG;
  eLj03:
  $z0V4z = str_replace("\x70\150", "\146", $z0V4z);
  goto RKtsz;
  vIv1O:
  $OIlsi += 0.25;
  goto CxdPy;
  SmoRO:
  PYPA7:
  goto RgIKY;
  DPwsP:
  owsr1:
  goto pcjN8;
  UqLcG:
  if (!substr_count($TuV5O, "\40")) {
   goto NNvf2;
  }
  goto y7qDL;
  leUzt:
  return 0.5;
  goto O16_E;
  s541a:
  $OIlsi -= 2;
  goto Mt2QX;
  kyqjQ:
  if (!($JtEff > 6)) {
   goto ILaGx;
  }
  goto Wsice;
  HPytD:
  nyY5_:
  goto SvFQo;
  MbVON:
  TDubG:
  goto x51Qe;
  IokIh:
  if (!($z0V4z[strlen($z0V4z) - 1] == $TuV5O[strlen($TuV5O) - 1])) {
   goto owsr1;
  }
  goto grenf;
  J4M7m:
  return 1;
  goto SmoRO;
  cEaFa:
  sort($N4bjQ);
  goto Tz1jy;
  V3grt:
  $TuV5O = str_replace("\x20", '', $TuV5O);
  goto BNQRH;
  YASC0:
  $OIlsi += 0.15;
  goto aHcD4;
  I3kvh:
  jXSJm:
  goto o_9Pt;
  xQzNG:
  JcBsO:
  goto UqLcG;
  ycOf0:
  $TuV5O = str_replace("\x7a", "\163", $TuV5O);
  goto eLj03;
  xwVqg:
  $OIlsi -= 1;
  goto H67ah;
  OQ0Xp:
  if (!($z0V4z == $TuV5O)) {
   goto PYPA7;
  }
  goto J4M7m;
  YlMFs:
  return $OIlsi;
  goto sMnT7;
  SvFQo:
  $z0V4z = $this->cleanForeign($z0V4z);
  goto iHK9I;
  o_9Pt:
  i3sS0:
  goto ouWVj;
  CxdPy:
  KZH_P:
  goto kyqjQ;
  QIhGi:
  if (!($z0V4z[0] != $TuV5O[0])) {
   goto h3X0Q;
  }
  goto muGEf;
  i8RS2:
  $r67Sz = strtolower($TuV5O[strlen($TuV5O) - 1]) === "\x73";
  goto DVajk;
  uxvlU:
  $N4bjQ = array_unique($N4bjQ);
  goto A3Oor;
  y42AC:
  if (!$e1_xK) {
   goto JcBsO;
  }
  goto m45gw;
  H6h_2:
  sort($N4bjQ);
  goto FdR_h;
  BNQRH:
  $N4bjQ = str_split($z0V4z);
  goto BLBaB;
  sr3gf:
  $OIlsi += -0.9;
  goto RXElU;
  vCRDD:
  $TuV5O = str_replace("\151\145", "\x79", $TuV5O);
  goto A9iqR;
  m45gw:
  $OIlsi++;
  goto bAi0j;
  Mt2QX:
  iTF8J:
  goto QIhGi;
  cJh53:
  $XbmiR = $this->stripVowels($TuV5O);
  goto ZG11k;
  muGEf:
  $OIlsi += 0.5;
  goto IF0nR;
  PQg7y:
  foreach ($L_ENw as $Hw9T4) {
   goto COK_z;
   tl4Yg:
   lWfJF:
   goto Anb0r;
   Anb0r:
   if (!(strlen($Hw9T4) < 2)) {
    goto l2KZM;
   }
   goto NGZFH;
   COK_z:
   if (!($this->stripVowels($Hw9T4) == $Hw9T4)) {
    goto KhIUi;
   }
   goto UoI1j;
   rivZ4:
   KhIUi:
   goto L3qnq;
   X0FSc:
   Mpcrw:
   goto aQfV2;
   Ezp5x:
   $OIlsi += 0.6;
   goto X0FSc;
   UoI1j:
   $OIlsi += 1.5;
   goto o7TXs;
   A_2HT:
   if (!(strlen($Hw9T4) < 3)) {
    goto Mpcrw;
   }
   goto Ezp5x;
   GNYrc:
   $OIlsi += 1;
   goto rO32g;
   qADxe:
   l2KZM:
   goto A_2HT;
   zrLcS:
   $OIlsi += 0.4;
   goto WSgLc;
   aB9Cz:
   $OIlsi += 1.5;
   goto tl4Yg;
   WSgLc:
   eVze_:
   goto bjMBm;
   o7TXs:
   if (!(strlen($Hw9T4) == 1)) {
    goto djCIo;
   }
   goto GNYrc;
   rO32g:
   djCIo:
   goto rivZ4;
   L3qnq:
   if (!(strlen($Hw9T4) == 1)) {
    goto lWfJF;
   }
   goto aB9Cz;
   bjMBm:
   Adg1h:
   goto mOw6r;
   aQfV2:
   if (!(strlen($Hw9T4) < 4)) {
    goto eVze_;
   }
   goto zrLcS;
   NGZFH:
   $OIlsi += 1;
   goto qADxe;
   mOw6r:
  }
  goto MbVON;
  E3RyW:
  if (!($z0V4z == $TuV5O)) {
   goto nyY5_;
  }
  goto bv37x;
  o41Vx:
  $z0V4z = str_replace("\151\145", "\171", $z0V4z);
  goto vCRDD;
  ifR3Z:
  if (!(implode('', $N4bjQ) == implode('', $C3ofE))) {
   goto GHUxZ;
  }
  goto z2vJy;
  xIJRg:
  YFm7j:
  goto YlMFs;
  BW5Gd:
  if (!($JtEff > 4)) {
   goto muX4n;
  }
  goto SUqNd;
  RXElU:
  c3TU0:
  goto o41Vx;
  SUqNd:
  $OIlsi += 0.25;
  goto YGGGa;
  y7qDL:
  $L_ENw = explode("\40", $TuV5O);
  goto GUhoU;
  pcjN8:
  if (!(strlen($z0V4z) > 2)) {
   goto i3sS0;
  }
  goto R_wa3;
  YGGGa:
  muX4n:
  goto W3lIv;
  v1Gtw:
  Tn8iM:
  goto oui20;
  grenf:
  $OIlsi -= 0.3;
  goto DPwsP;
  A9iqR:
  $z0V4z = str_replace("\172", "\163", $z0V4z);
  goto ycOf0;
  W3lIv:
  if (!($JtEff > 5)) {
   goto KZH_P;
  }
  goto vIv1O;
  IF0nR:
  h3X0Q:
  goto IokIh;
  z2vJy:
  $OIlsi += -0.9;
  goto kyzP5;
  bv37x:
  return 0.4;
  goto HPytD;
  a_ERL:
  if (!($LVG7Q == $XbmiR)) {
   goto iTF8J;
  }
  goto s541a;
  BLBaB:
  $C3ofE = str_split($TuV5O);
  goto cEaFa;
  FdR_h:
  sort($C3ofE);
  goto F37JL;
  xpYKK:
  $z0V4z = strtolower($z17RV);
  goto SEV2x;
  kyzP5:
  GHUxZ:
  goto uxvlU;
  Tz1jy:
  sort($C3ofE);
  goto ifR3Z;
  SEV2x:
  $TuV5O = strtolower($ZUhXp);
  goto ocKT8;
  Wsice:
  $OIlsi += 0.1;
  goto BIX_F;
  sMnT7:
 }
 private function DecypherStrDict($JnOaj, $CWSLt)
 {
  goto kInu6;
  AqUpY:
  $VtwD1 = explode($qv77V, $WcwSv);
  goto f2cmz;
  o33JM:
  yrBoq:
  goto ke3sU;
  f2cmz:
  foreach ($VtwD1 as $Vl43k) {
   goto ytrrL;
   sNLCy:
   $UVxL7[$JnOaj][$MS5iO] = explode("\15\12", $Vl43k);
   goto hbNNx;
   ytrrL:
   $f0_IZ = $Vl43k[0];
   goto ORZXV;
   hbNNx:
   wY6xF:
   goto csOy1;
   ORZXV:
   $MS5iO = $this->DicIndex($f0_IZ);
   goto sNLCy;
   csOy1:
  }
  goto o33JM;
  T5umM:
  if (!array_key_exists($JnOaj, $UVxL7)) {
   goto IRGiP;
  }
  goto UFu_i;
  kDv7D:
  foreach ($tu4In as $PQQQr) {
   goto uU9hM;
   oG1dZ:
   $MS5iO = $this->DicIndex($f0_IZ);
   goto YRy6K;
   GP1DC:
   nfBQ7:
   goto cd5Ca;
   Ae2aZ:
   $rSn5k[$JnOaj][$MS5iO] = array();
   goto jGxYl;
   Rwtzd:
   hKN8q:
   goto GP1DC;
   YRy6K:
   $rAWfL = explode("\xd\xa", $PQQQr);
   goto Ae2aZ;
   uU9hM:
   $f0_IZ = $PQQQr[0];
   goto oG1dZ;
   jGxYl:
   foreach ($rAWfL as $xBuzL) {
    goto n8DTM;
    n8DTM:
    list($uLzfO, $ECQvl) = explode("\43", $xBuzL);
    goto WQxmE;
    WQxmE:
    $rSn5k[$JnOaj][$MS5iO][$uLzfO] = $ECQvl;
    goto s10ba;
    s10ba:
    wQjmC:
    goto ofNsZ;
    ofNsZ:
   }
   goto Rwtzd;
   cd5Ca:
  }
  goto oyn4a;
  Z9KVe:
  $HsgIT =& $this->G_PosArray;
  goto T5umM;
  BpvIk:
  HGQeb:
  goto nwzpl;
  jTShn:
  IRGiP:
  goto jC75Y;
  MFR6Y:
  $HsgIT[$JnOaj] = $MEjY6;
  goto BpvIk;
  PI5YQ:
  $GV2OT = "\15\xa\75\x3d\75\x3d\75\75\x3d\x3d\x3d\x3d\75\x3d\75\x3d\75\75\x3d\75\75\x3d\75\75\x3d\75\75\x3d\x3d\75\x3d\x3d\x3d\x3d\75\75\75\75\75\x3d\75\75\x3d\75\xd\xa";
  goto vCap0;
  vCap0:
  $qv77V = "\xd\xa\53\53\53\x2b\53\x2b\53\x2b\x2b\15\12";
  goto nEREM;
  ke3sU:
  $tu4In = explode($qv77V, $ImeYH);
  goto kDv7D;
  sgp9T:
  h2ogB:
  goto jTShn;
  UFu_i:
  if (!is_array($UVxL7[$JnOaj])) {
   goto h2ogB;
  }
  goto lqEmh;
  kInu6:
  $this->clear_CACHE();
  goto dYWlO;
  SCa2P:
  $rSn5k =& $this->G_METArray;
  goto Z9KVe;
  lqEmh:
  return true;
  goto sgp9T;
  nEREM:
  list($WcwSv, $ImeYH, $MEjY6) = explode($GV2OT, $CWSLt);
  goto AqUpY;
  dYWlO:
  $UVxL7 =& $this->G_DictArray;
  goto SCa2P;
  jC75Y:
  $UVxL7[$JnOaj] = array();
  goto PI5YQ;
  oyn4a:
  pXxFO:
  goto Yvf3b;
  Yvf3b:
  if (!trim($MEjY6)) {
   goto HGQeb;
  }
  goto MFR6Y;
  nwzpl:
 }
 public function BuildDictionary($ZliKl, $pXfUH = false)
 {
  goto F2aHC;
  cVZP7:
  ksort($QuJCb);
  goto MdK8k;
  h6jQF:
  $ImeYH = '';
  goto cVZP7;
  IGq_J:
  foreach ($ZliKl as $z17RV) {
   goto yez3F;
   XGX5c:
   $QuJCb[$KDYA8][$gH1BK] .= "\174" . $sZzBM;
   goto h1_W6;
   BvI1z:
   jIGK7:
   goto a0W3Y;
   wNpC7:
   goto CIRYO;
   goto BvI1z;
   H6qBw:
   TizfJ:
   goto J1UPW;
   emAsR:
   $KDYA8 = $this->DicIndex($gH1BK);
   goto CAQw2;
   j39Ai:
   EDs1N:
   goto Ywgva;
   D2vm3:
   HmpW3:
   goto f94vE;
   Lw68D:
   CIRYO:
   goto Xdey0;
   h1_W6:
   goto CVZeh;
   goto gvk7H;
   SoV0p:
   $F3m94 = '';
   goto YZHKU;
   a0W3Y:
   $sZzBM = $z17RV[0] . $PpWrN;
   goto Lw68D;
   XWEpM:
   DZxta:
   goto j2qXE;
   BJrSQ:
   IDfwU:
   goto PJ_yT;
   THDn9:
   RjL7N:
   goto KKXE4;
   G7V8k:
   UcXcO:
   goto eC5Na;
   nG2JX:
   CVZeh:
   goto JqUEM;
   YZHKU:
   goto HmpW3;
   goto G7V8k;
   nqB6_:
   $gH1BK = $this->PhoneticCode($z17RV);
   goto emAsR;
   Xdey0:
   if (array_key_exists($KDYA8, $QuJCb)) {
    goto IDfwU;
   }
   goto xVcKB;
   Jsg8B:
   $QuJCb[$KDYA8][$gH1BK] = $sZzBM;
   goto nG2JX;
   cH8p_:
   if (array_key_exists($pXfUH, $UVxL7)) {
    goto DZxta;
   }
   goto hfkuM;
   hfkuM:
   $UVxL7[$pXfUH] = array();
   goto XWEpM;
   T1b6o:
   $sZzBM = '' . $PpWrN;
   goto wNpC7;
   PULFx:
   $ajGVf++;
   goto THDn9;
   xVcKB:
   $QuJCb[$KDYA8] = array();
   goto BJrSQ;
   f94vE:
   $PpWrN++;
   goto PULFx;
   CAQw2:
   if (strlen($z17RV) > 0) {
    goto jIGK7;
   }
   goto T1b6o;
   Ywgva:
   $PpWrN = 0;
   goto H6qBw;
   j2qXE:
   $UVxL7[$pXfUH][$this->DicIndex($F3m94)] = array_slice($ZliKl, $ajGVf - $PpWrN, $PpWrN);
   goto j39Ai;
   J1UPW:
   $WcwSv .= $z17RV . "\15\xa";
   goto nqB6_;
   jQIsj:
   $WcwSv .= $qv77V;
   goto OqUXQ;
   gvk7H:
   kplCT:
   goto Jsg8B;
   PJ_yT:
   if (!array_key_exists($gH1BK, $QuJCb[$KDYA8])) {
    goto kplCT;
   }
   goto XGX5c;
   eC5Na:
   $F3m94 = $z17RV[0];
   goto D2vm3;
   yez3F:
   if (!($F3m94 != "\43" && $F3m94 != $z17RV[0])) {
    goto TizfJ;
   }
   goto jQIsj;
   OqUXQ:
   if (!$pXfUH) {
    goto EDs1N;
   }
   goto cH8p_;
   JqUEM:
   if (strlen($z17RV) > 0) {
    goto UcXcO;
   }
   goto SoV0p;
   KKXE4:
  }
  goto dGRQr;
  XpjIn:
  $ajGVf = 0;
  goto IGq_J;
  CPJuB:
  $UVxL7[$pXfUH][$this->DicIndex($F3m94)] = array_slice($ZliKl, $ajGVf - $PpWrN, $PpWrN);
  goto eoUl1;
  eoUl1:
  EKoqt:
  goto h6jQF;
  hUJmd:
  $F3m94 = "\x23";
  goto ZuMlk;
  kHeMq:
  $ZliKl = array_unique($ZliKl);
  goto Ep4vE;
  enNGY:
  if (is_array($UVxL7[$pXfUH])) {
   goto ZWqqJ;
  }
  goto cOR46;
  A9xP0:
  $HsgIT =& $this->G_PosArray;
  goto DBRLq;
  cOR46:
  $UVxL7[$pXfUH] = array();
  goto TZI_D;
  pK4t9:
  sort($ZliKl);
  goto kHeMq;
  ZuMlk:
  $QuJCb = array();
  goto mtJrI;
  vcnhW:
  $qv77V = "\x2b\53\x2b\53\x2b\53\53\53\x2b\15\12";
  goto XtUzB;
  Ygblm:
  Vv3Q9:
  goto Pccjm;
  qRqbs:
  F9QD8:
  goto pK4t9;
  U94qQ:
  $GV2OT = "\x3d\75\x3d\x3d\x3d\x3d\x3d\75\75\75\x3d\75\75\75\75\x3d\75\75\x3d\x3d\x3d\75\x3d\x3d\75\75\75\75\x3d\x3d\x3d\x3d\x3d\x3d\75\75\75\75\x3d\75\x3d\75\15\12";
  goto vcnhW;
  KsRsX:
  if (!$pXfUH) {
   goto Vv3Q9;
  }
  goto H87M4;
  H87M4:
  $rSn5k[$pXfUH] = $QuJCb;
  goto Ygblm;
  F2aHC:
  $UVxL7 =& $this->G_DictArray;
  goto TW3h7;
  Ep4vE:
  sort($ZliKl);
  goto U94qQ;
  DBRLq:
  if (!$pXfUH) {
   goto F9QD8;
  }
  goto lVj_w;
  XtUzB:
  $WcwSv = '';
  goto hUJmd;
  Pccjm:
  return $WcwSv . $GV2OT . $ImeYH . $GV2OT;
  goto DK3_4;
  MdK8k:
  foreach ($QuJCb as $h8ilm => $tjIqD) {
   goto UnQOM;
   lO0Vd:
   q0ESQ:
   goto ctEP_;
   EFJPJ:
   $ImeYH .= $qv77V;
   goto lO0Vd;
   ctEP_:
   foreach ($tjIqD as $Nc0hc => $IfwRO) {
    $ImeYH .= "{$Nc0hc}\x23{$IfwRO}\xd\xa";
    SFg3P:
   }
   goto fqfWu;
   fqfWu:
   ij45m:
   goto Agj8J;
   bY_m9:
   if (!($ImeYH != '')) {
    goto q0ESQ;
   }
   goto EFJPJ;
   Agj8J:
   CXnWX:
   goto OWwLR;
   UnQOM:
   ksort($tjIqD);
   goto bY_m9;
   OWwLR:
  }
  goto gnw2G;
  TW3h7:
  $rSn5k =& $this->G_METArray;
  goto A9xP0;
  TZI_D:
  ZWqqJ:
  goto CPJuB;
  gnw2G:
  al6gI:
  goto KsRsX;
  dGRQr:
  oKJ5F:
  goto TbUaG;
  mtJrI:
  $PpWrN = 0;
  goto XpjIn;
  TbUaG:
  if (!$pXfUH) {
   goto EKoqt;
  }
  goto enNGY;
  lVj_w:
  $this->clear_CACHE();
  goto qRqbs;
  DK3_4:
 }
 public function PhoneticCode($z17RV)
 {
  goto l4rCu;
  skXil:
  nh3ul:
  goto pZx_X;
  ke4xJ:
  return "\60";
  goto skXil;
  l4rCu:
  $z17RV = $this->cleanForeign($z17RV);
  goto fpAJM;
  qC1OA:
  $gH1BK[0] = "\101";
  goto CXOD6;
  WyxB0:
  return $gH1BK;
  goto gNy0J;
  OLi08:
  if (!(strlen($gH1BK) < 1)) {
   goto nh3ul;
  }
  goto ke4xJ;
  pZx_X:
  if (!($gH1BK[0] == "\105" || $gH1BK[0] == "\111" || $gH1BK[0] == "\x4f" || $gH1BK[0] == "\x55")) {
   goto zsjZO;
  }
  goto qC1OA;
  CXOD6:
  zsjZO:
  goto WyxB0;
  fpAJM:
  $gH1BK = substr(metaphone($z17RV), 0, 4);
  goto OLi08;
  gNy0J:
 }
 private $SimpleSpellCache_CASED = array();
 private $SimpleSpellCache_UNCASED = array();
 public function SimpleSpell($z17RV, $APQtA)
 {
  goto sbk5w;
  sbk5w:
  $UVxL7 = $this->G_DictArray;
  goto mrKdb;
  VSeQa:
  $PZQ9A = $this->DicIndex(strtoupper($z17RV));
  goto Uba8b;
  JsjPv:
  return $this->SimpleSpellCache_UNCASED[strtolower($z17RV)];
  goto nusvF;
  ZZsAT:
  $fQEq0 = 0;
  goto i20Lw;
  frAW7:
  $DzhrJ = $i4Ypu[$fQEq0];
  goto FbNKu;
  z4Tf_:
  tCSyP:
  goto JeJ3s;
  tPPvv:
  mtHct:
  goto kBBn3;
  FbNKu:
  if (!array_key_exists($vqVqX, $UVxL7[$DzhrJ])) {
   goto pCH7w;
  }
  goto LIinB;
  lmQj4:
  kgiF8:
  goto VSeQa;
  yXkSo:
  if ($APQtA) {
   goto FJu6A;
  }
  goto UA9qg;
  c0b1Q:
  return false;
  goto d3FHs;
  N2RU3:
  if ($APQtA) {
   goto mtHct;
  }
  goto ifMEB;
  TdyxW:
  goto G8HSP;
  goto Sq0aS;
  YHX0x:
  return true;
  goto f8cZP;
  A7b3N:
  return $this->SimpleSpellCache_CASED[$z17RV];
  goto lu9_b;
  Uba8b:
  $iBaoE = $this->DicIndex(strtolower($z17RV));
  goto Lgrne;
  Cs5Tp:
  return true;
  goto vWK2d;
  P0Fow:
  return true;
  goto Cwxvw;
  d3FHs:
  J891s:
  goto N2RU3;
  Cwxvw:
  v7295:
  goto Sm_yR;
  mrKdb:
  if (!array_key_exists(strtolower($z17RV), $this->GBanned)) {
   goto J891s;
  }
  goto c0b1Q;
  X2Xws:
  FJu6A:
  goto EdBTY;
  vWK2d:
  i62Wm:
  goto frSQ5;
  uSJck:
  $this->SimpleSpellCache_CASED[$z17RV] = false;
  goto z4Tf_;
  rk2BK:
  if (!($fQEq0 < count($i4Ypu))) {
   goto Up63q;
  }
  goto frAW7;
  frSQ5:
  goto rmA2K;
  goto lmQj4;
  Sq0aS:
  Up63q:
  goto yXkSo;
  kBBn3:
  if (!array_key_exists(strtolower($z17RV), $this->SimpleSpellCache_UNCASED)) {
   goto FsAUx;
  }
  goto JsjPv;
  A0O4B:
  QzI0C:
  goto eOzNy;
  UA9qg:
  $this->SimpleSpellCache_CASED[$z17RV] = false;
  goto ldS0T;
  lu9_b:
  U1fnm:
  goto Hcdlk;
  ldS0T:
  goto tCSyP;
  goto X2Xws;
  JeJ3s:
  return false;
  goto EpEBr;
  i20Lw:
  G8HSP:
  goto rk2BK;
  GT1Lc:
  $this->SimpleSpellCache_CASED[$z17RV] = true;
  goto Cs5Tp;
  nusvF:
  FsAUx:
  goto A0O4B;
  jgcHM:
  pCH7w:
  goto Y4_NP;
  ZSk0x:
  $i4Ypu = array_keys($UVxL7);
  goto ZZsAT;
  Sm_yR:
  rmA2K:
  goto jgcHM;
  y5wyM:
  $this->SimpleSpellCache_UNCASED[strtolower($z17RV)] = true;
  goto P0Fow;
  eOzNy:
  $vqVqX = $this->DicIndex($z17RV);
  goto ZSk0x;
  bIGA4:
  if (!(array_key_exists($PZQ9A, $UVxL7[$DzhrJ]) && $this->search_array_caseless($z17RV, $UVxL7[$DzhrJ][$PZQ9A]))) {
   goto v7295;
  }
  goto y5wyM;
  Y4_NP:
  ciqXI:
  goto et3iP;
  EdBTY:
  $this->SimpleSpellCache_UNCASED[strtolower($z17RV)] = false;
  goto uSJck;
  Hcdlk:
  goto QzI0C;
  goto tPPvv;
  f8cZP:
  FsGS7:
  goto bIGA4;
  Lgrne:
  if (!(array_key_exists($iBaoE, $UVxL7[$DzhrJ]) && $this->search_array_caseless($z17RV, $UVxL7[$DzhrJ][$iBaoE]))) {
   goto FsGS7;
  }
  goto UE0qO;
  DJjBV:
  if (!$this->BinarySearch($UVxL7[$DzhrJ][$vqVqX], $z17RV, 0, count($UVxL7[$DzhrJ][$vqVqX]))) {
   goto i62Wm;
  }
  goto GT1Lc;
  UE0qO:
  $this->SimpleSpellCache_UNCASED[strtolower($z17RV)] = true;
  goto YHX0x;
  et3iP:
  $fQEq0++;
  goto TdyxW;
  LIinB:
  if ($APQtA) {
   goto kgiF8;
  }
  goto DJjBV;
  ifMEB:
  if (!array_key_exists($z17RV, $this->SimpleSpellCache_CASED)) {
   goto U1fnm;
  }
  goto A7b3N;
  EpEBr:
 }
 private static function search_array_caseless($bG1eF, $sMFL8)
 {
  goto gxmNm;
  AE6kv:
  rxRXn:
  goto zWuhc;
  gxmNm:
  if (is_array($sMFL8)) {
   goto rxRXn;
  }
  goto uXiUY;
  uXiUY:
  return false;
  goto AE6kv;
  zWuhc:
  return preg_grep("\x2f\x5e" . preg_quote($bG1eF, "\x2f") . "\44\57\151", $sMFL8);
  goto d2sm5;
  d2sm5:
 }
 private static function BinarySearch($sMFL8, $GD0GC, $Z4moh, $nMuSa)
 {
  goto xIjkl;
  fJscV:
  return true;
  goto w6muA;
  w6muA:
  goto lTbLC;
  goto wtW7z;
  wtW7z:
  W23tE:
  goto m3tyC;
  xIjkl:
  if (!($Z4moh > $nMuSa)) {
   goto Tsf_S;
  }
  goto fhDLM;
  KiKzG:
  vT4vw:
  goto fJscV;
  VMHPQ:
  Tsf_S:
  goto fcynE;
  aDp5H:
  lTbLC:
  goto YonIh;
  de1Lh:
  goto lTbLC;
  goto KiKzG;
  Q_OfE:
  if (array_key_exists($WLJs_, $sMFL8) && $GD0GC < $sMFL8[$WLJs_]) {
   goto W23tE;
  }
  goto de1Lh;
  YonIh:
  return PHPSpellCheck::BinarySearch($sMFL8, $GD0GC, $WLJs_ + 1, $nMuSa);
  goto ajgxY;
  fhDLM:
  return false;
  goto VMHPQ;
  m3tyC:
  return PHPSpellCheck::BinarySearch($sMFL8, $GD0GC, $Z4moh, $WLJs_ - 1);
  goto aDp5H;
  WFdLR:
  if (array_key_exists($WLJs_, $sMFL8) && $sMFL8[$WLJs_] === $GD0GC) {
   goto vT4vw;
  }
  goto Q_OfE;
  fcynE:
  $WLJs_ = intval(($Z4moh + $nMuSa) / 2);
  goto WFdLR;
  ajgxY:
 }
 private static function DicIndex($sGnC5)
 {
  return ord(substr(trim($sGnC5), 0, 1));
 }
 private static function filepath2url($wEdVb)
 {
  goto U723k;
  EUASi:
  $b293_ = implode("\57", $b293_);
  goto VVPWk;
  t6XFp:
  $VYuzM = strtolower($VYuzM[0]);
  goto Dlh6j;
  U723k:
  $b293_ = explode("\x2f", $_SERVER["\120\110\x50\137\x53\x45\x4c\x46"]);
  goto YxVga;
  YxVga:
  array_pop($b293_);
  goto EUASi;
  X4kfQ:
  return "{$VYuzM}\72\x2f\x2f{$olCHy}{$b293_}\57{$wEdVb}";
  goto mbzrt;
  Dlh6j:
  $olCHy = $_SERVER["\123\105\122\126\105\x52\x5f\116\x41\115\105"];
  goto X4kfQ;
  VVPWk:
  $VYuzM = explode("\x2f", $_SERVER["\123\105\x52\x56\105\122\x5f\x50\122\x4f\x54\117\x43\x4f\x4c"]);
  goto t6XFp;
  mbzrt:
 }
 private static function loadDataFromURL($pYgPy)
 {
  return file_get_contents(v2DeW($pYgPy));
 }
 public function AddCustomDictionaryFromArray($sMFL8)
 {
  $this->BuildDictionary($sMFL8, "\x53\120\105\x4c\x4c\56\111\x4e\x50\125\124\56\101\122\122\101\131");
 }
 private static function ArrClean($wIPMc)
 {
  return array_unique($wIPMc);
 }
 private static function Capitalise($z17RV)
 {
  return ucfirst($z17RV);
 }
 private static function DeCapitalise($z17RV)
 {
  $z17RV[0] = strtolower($z17RV[0]);
  return $z17RV;
 }
 private static function isHTML($OcuWL)
 {
  return $OcuWL == strip_tags($OcuWL);
 }
}
?>