<?php

$entry = new Craur(array(
    'name' => 'My Book',
    'year' => '2012'
));
$raw_mapping_keys = array(
    'name',
    'year'
);
$raw_identifier_keys = array(
);
$expected_row_data = array(
    'My Book',
    '2012'
);

$results_row_data = Craur::extractPathsFromObject($entry, $raw_mapping_keys, $raw_identifier_keys);
echo "expected: ";
echo json_encode($expected_row_data) . PHP_EOL;
echo "given: ";
echo json_encode($results_row_data) . PHP_EOL;

assert(json_encode(array($expected_row_data)) == json_encode($results_row_data));

$entry = new Craur(array(
    'name' => 'My Book',
    'year' => '2012',
    'author' => array(
        'name' => 'Hans',
        'age' => '32'
    )
));
$raw_mapping_keys = array(
    'name',
    'year',
    'author.name',
    'author.age'
);
$raw_identifier_keys = array(
    'author'
);
$expected_row_data = array(
    'My Book',
    '2012',
    'Hans',
    '32'
);

$results_row_data = Craur::extractPathsFromObject($entry, $raw_mapping_keys, $raw_identifier_keys);
echo "expected: ";
echo json_encode($expected_row_data) . PHP_EOL;
echo "given: ";
echo json_encode($results_row_data) . PHP_EOL;

assert(json_encode(array($expected_row_data)) == json_encode($results_row_data));


$entry = new Craur(array(
    'name' => 'My Book',
    'year' => '2012',
    'author' => array(
        'name' => 'Hans',
        'age' => '32'
    )
));
$raw_mapping_keys = array(
    'name',
    'year',
    'author.name',
    'author.age'
);
$raw_identifier_keys = array(
    'author'
);
$expected_row_data = array(
    'My Book',
    '2012',
    'Hans',
    '32'
);

$results_row_data = Craur::extractPathsFromObject($entry, $raw_mapping_keys, $raw_identifier_keys);
echo "expected: ";
echo json_encode($expected_row_data) . PHP_EOL;
echo "given: ";
echo json_encode($results_row_data) . PHP_EOL;

assert(json_encode(array($expected_row_data)) == json_encode($results_row_data));



$entry = new Craur(array(
   'book' => array(
       'name' => 'My Book',
       'year' => '2012',
        'author' => array(
            'name' => 'Hans',
            'age' => '32'
        )
    )
));
$raw_mapping_keys = array(
    'book.name',
    'book.year',
    'book.author.name',
    'book.author.age'
);
$raw_identifier_keys = array(
    'book',
    'book.author'
);
$expected_row_data = array(
    'My Book',
    '2012',
    'Hans',
    '32'
);

$results_row_data = Craur::extractPathsFromObject($entry, $raw_mapping_keys, $raw_identifier_keys);
echo "expected: ";
echo json_encode($expected_row_data) . PHP_EOL;
echo "given: ";
echo json_encode($results_row_data) . PHP_EOL;

assert(json_encode(array($expected_row_data)) == json_encode($results_row_data));

