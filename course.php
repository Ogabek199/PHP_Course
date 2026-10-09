
<?php
echo "<h1>Variables</h1> \n";
$lastName = "Og'abek ";
$firstName = 'Otaxonov ';
$age = 19;
echo $lastName . "\n", $firstName . "\n", $age . "\n";

echo "<h1>PHP case-sensitive:</h1> \n";
$name = "Og'abek";
$Name = "Og'abek";
echo $name . "\n", $Name . "\n";

echo "<h1>Data Types</h1>\n";

// string
$name = 'Ali';

// integer
$age = 30;

// float
$price = 19.19;

// Boolean
$isAdmin = true;
$isStatus = false;

// Array
// Arraydagi hamma elementlarni chiqarish
// important => arrayni echo da chiqarsa warning beradi
// print_r bilan chiqarsa bo'ladi lekin
$cars = [
  'malibu',
  'jentra',
  'equinox',
];
foreach ($cars as $car) {
  echo $car . "\n";
}

// Null
$user = null;

// console
echo $name . "\n", $age . "\n", $price . "\n", $isAdmin . "\n", $isStatus . "\n", $user . "\n";

// type_verifired
var_dump($isAdmin);

// array elementlari ustida ishlash
$fruits = ['olma', 'nok', 'anor', 'banan'];
// 1 Arrayga element qo‘shish
$fruits[] = 'uzum';

// 2 Elementni o‘zgartirish
$fruits[1] = 'gilos';

// 3 Elementni o‘chirish
unset($fruits[1]);

// 4 Array uzunligi
\count($fruits);

// console
print_r($fruits);

// Type Casting => Bir type'ni boshqasiga o'tkazish.
$number = 25;
$number = (string) $number;
$number = (float) $number;
$number = (bool) $number;
var_dump($number);

// if / else / elseif => Shart tekshirish.
$age = 20;
if ($age >= 18) {
  echo 'voyaga yetgan' . "\n";
} elseif ($age < 0) {
  echo 'voyaga yetmaga';
} else {
  echo "noto'g'ri yosh";
};

// switch => Bir qiymatni bir nechta variant bilan solishtirish.
$phoneLanguageSelector = 'ru';
switch ($phoneLanguageSelector) {
  case 'uz':
    echo 'Assalomu alaykum' . "\n";
    break;

  case 'ru':
    echo 'Здравствуйте' . "\n";
    break;

  case 'en':
    echo 'Hello' . "\n";
    break;

  default:
    echo 'Nomalum til' . "\n";
    break;
};

// match — zamonaviy PHP'dagi qulayroq variant.
$phoneLanguageSelector = 'uz';
// 1 - algoritm
$result = match ($phoneLanguageSelector) {
  'uz' => 'Assalomu alaykum',
  'ru' => 'Здравствуйте',
  'en' => 'Hello',
  default => 'Nomalum til',
};
echo $result . "\n";

// 2 - algoritm
$color = 'yellow';
$result = match ($color) {
  'red' => "To'xtang!",
  'yellow' => 'Kuting!',
  'green' => 'Yuring!',
  default => 'Nomalum rang',
};
echo $result . "\n";

// 3 - algoritm
$month = 'dekabr';

$result = match ($month) {
  'mart', 'aprel', 'may' => 'Bahor',
  'Mart', 'Aprel', 'May' => 'Bahor',
  'iyun', 'iyul', 'avgust' => 'Yoz',
  'Iyun', 'Iyul', 'Avgust' => 'Yoz',
  'sentyabr', 'oktyabr', 'noyabr' => 'Kuz',
  'Sentyabr', 'Oktyabr', 'Noyabr' => 'Kuz',
  'dekabr', 'yanvar', 'fevral' => 'Qish',
  'Dekabr', 'Yanvar', 'Fevral' => 'Qish',
  default => 'Nomalum oy'
};
echo $result . "\n";

// 4 - algoritm
$studentScore = 85;

$result = match (true) {
  $studentScore >= 90 => 'Alo',
  $studentScore >= 70 => 'Yaxshi',
  $studentScore >= 50 => 'Qoniqarli',
  $studentScore < 50 => 'Yiqildi',
  default => 'Bunday ball mavjud emas',
};
echo $result . "\n";

// for => Biror amalni ma'lum marta takrorlash.
// 1 - Algoritm Toq Sonlarni Chiqarish
for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 === 1) {
    echo $i . "\n";
  }
};

// 2 - Algoritm Juft Sonlar Chiqarish
for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 === 0) {
    echo $i . "\n";
  }
};

// 3 - Karra jadvali
for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    echo "$i x $j = " . ($i * $j) . "\n";
  }
  echo "\n";
};

#foreach - Array bilan ishlashda eng muhim looplardan biri.
#1 - Algoritm massivdagi elementlarni chiqarish
$fruits = ['olma', 'nok', 'anor', 'olcha'];
foreach ($fruits as $fruit) {
  echo $fruit . "\n";
}

#2 - Algoritm massivdagi elementlarni key bilan birga chiqarish
$fruits = ['olma', 'nok', 'anor', 'olcha'];
foreach ($fruits as $index => $fruit) {
  echo ($index + 1). " " . $fruit . "\n";
}

#break - Loopni to‘liq to‘xtatadi. ========= continue - Joriy aylanishni tashlab, keyingi aylanishga o'tadi.
#1 - Algoritm break bo'yicha
for ($i = 1; $i <= 5; $i++) {
   if ($i === 4) {
    break;
   }
   echo "\n" . $i . "\n";
};

#2 - Algoritm continue bo'yicha
for ($i = 1; $i <= 5; $i++) {
  if ($i === 5) {
    continue;
  }
  echo "\n" . $i . "\n";
}

#2 - Algoritm break and continue bo'yicha
for ($i = 1; $i <= 10; $i++) {
  if ($i === 5) {
    continue;
  } elseif ($i === 8) {
    break;
  }
  echo "\n" . $i . "\n";
}

#3 - Algoritm Foreach and Break and Continue bo'yicha 
$users = ['Alice', 'Bob', 'John', 'Charlie', 'Stop', 'David'];
foreach ($users as $user) {
  if ($user === 'John') {
    continue;
  } elseif ($user === 'Stop') {
    break;
  }
  echo "\n" . $user . "\n";
}

#Function Algoritm
#1 - masala
function sayHi() {
  echo 'Salom';
};

#2 - masala
$name;
function hiName($name) {
   echo 'Salom' . " " . $name . "\n";
};
hiName('Ali');
hiName('Vali');
hiName('ValVali');

#3 - masala
$a = '';
$b = '';
function add($a, $b) {
  echo $a + $b;
};

$result = add(20, 20);
echo $result;

#4 - masala 
function multiply($a, $b) {
  return $a + $b;
}
echo multiply(5, 4);

#5 - masala 
function isAdult($age) {
   return $age >= 18;
}
var_dump(isAdult(20));

#6 - masala
function sayHello($name = 'Mehmon') {
  echo 'Salom' . " " . $name . "\n";
}
sayHello('John');
sayHello('Von');
sayHello('VonJohn');

#7 - masala 
function addNum(int $a, int $b): int {
   return $a + $b;
}
echo addNum(10, 20);

#8 - masala
function isAdultype(int $age): bool {
    return $age >= 18;
};
echo isAdultype(20);

#9 - masala Arrow Function
$square = fn(int $son) => ($son * $son);
echo "\n" . $square(25);

#10 - masala Arrow Function
$isAdultAge = fn(int $age): bool => $age >= 18;
var_dump($isAdultAge(20));

#11 - masala Anonymus Function
$isAdultAgeAnonymus = function(int $age): bool {
  return $age >= 18; 
};
var_dump($isAdultAgeAnonymus(10));
?>
