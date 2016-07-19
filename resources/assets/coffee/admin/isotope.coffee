$('.grid').isotope
  itemSelector: '.grid-item'
  layoutMode: 'fitRows'

$('.grid .grid-item.grid-colorize').each ->
  $(this).css 'background', randomColor(
    hue: 'bright'
    luminosity: 'light')
  return
