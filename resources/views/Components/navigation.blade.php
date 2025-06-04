@props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page': 'false'}}"
    {{ $attributes }}
    >{{$slot}}</a>





    <!-- 5. sor: attributes-ot használva megjelennek nekünk a href és az id is, ha a fejlesztői nézetet nézzük;
         6. sor: Átveszi a Home/About/Contact szövegeket a layout nav-nál;
         # Ha a type button, akkor false lesz az érték, kvázi semmi nem fog történni;
         # Jelenleg ha a type az 'a', akkor egy  anchor tag-et hoz létre, ha nem 'a', akkor egy button-t;

        -->

