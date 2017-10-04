var pumps = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // url points to a json file that contains an array of country names, see
  // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
  prefetch: 'data.json'
  });

  // passing in `null` for the `options` arguments will result in the default
  // options being used
  $('.prefetch .typeahead').typeahead(null, {
  name: 'pumps',
  source: pumps
});

function toggle(source) {
var checkboxes = document.querySelectorAll('input[class="checked"]');
for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i] != source)
        checkboxes[i].checked = source.checked;
}};
