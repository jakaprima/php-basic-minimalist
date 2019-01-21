            $array1 = [];

            $object = (object) array();
            $object->name = "My name";

            $array1['key1'] = [$object];

            echo dd($array1['key1'][0]->name);