Coordinates via callback
---

To set a coordinates field on saving, e.g. in a Metamodel, just integreate something similar to this in your dcaconfig.php file:

```sh
$GLOBALS['dlh_geocode']['address'] = array(
	'format'            => '%s, %s %s',
	'fieldformat'       => array(
		'action' => 'get',
		'name'   => 'id'
		),
	'fields_address'    => array('street_%s','postal_%s','city_%s'),
	'field_country'     => 'country',
	'field_language'    => '',
	'field_geocode'     => 'coords_%s'
	);

$GLOBALS['TL_DCA']['mm_TABLENAME']['fields']['COORDSFIELD']['save_callback'][] = array('delahaye\GeoCode','callbackCoordinates');
```

- format : like sprintf() for the address to search for
- fieldformat : Metamodels e.g. provide the edited id via GET in the backend and use it in every post field of the entry
- fields_address : fields from which the address ist built (see format) and maybe the id built in (see fieldformat), also like sprintf()
- field_country : fieldname of  the country-field
- field_geocode : fieldname of  the coordinates-field
- field_language : fieldname, normally not needed for getting coordinates
- mm_TABLENAME : name of the table, e.g. in a Metamodel
- COORDSFIELD : textfield with coordinates in the table

Maybe you'll have to save your entries twice to receive coordinates.