Tested on ubuntu 18.04 with php 7.2 and sqlite3 as the backing data store.

```sh
sudo apt-get install php-sqlite3
phpenmod -v 7.2 sqlite3
```
### Examples show
* All items in the inventory, sorted by SKU
* All pets, sorted by age ascending
* All pets, sorted by lifespan descending
* All cats, sorted by name
* All dogs, sorted by name
* All reptiles, sorted by color
* All mammals, sorted by age
* All non-animal items, sorted by price descending
* All brown or blue non-animal items, sorted by price descending
* Anything brown
* Anything brown between $20 and $70 (inclusive), priced high to low
* Anything priced >= $100, priced low to high
* All pets with lifespan >= 25yr, sorted by lifespan descending


Running the examples
```sh
$ php7.2 examples.php 
All items in the inventory, sorted by SKU
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 101|name: Mutt|quantity: 1|baseprice: $19.99|price: $19.99|color: brown|dateOfBirth: 01/05/2018|lifeSpan: 10|age: 1|description: Some sort of dog.  We dont know what type
sku: 102|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: black|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 103|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: white|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 104|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: black|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 105|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: brown|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 110|name: Tom Cat|quantity: 1|baseprice: $14.99|price: SALE! $7.50|color: brown|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady
sku: 111|name: Russian Blue Cat|quantity: 2|baseprice: $14.99|price: SALE! $7.50|color: gray|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady|notes: We got 2 of these from the same old lady
sku: 112|name: Persian Cat|quantity: 1|baseprice: $30.00|price: $30.00|color: white|dateOfBirth: 01/01/2017|lifeSpan: 18|age: 2|description: Imported from Persia|notes: Not really from persia
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 114|name: Minx Cat|quantity: 1|baseprice: $12.00|price: $12.00|color: white|dateOfBirth: 09/01/2010|lifeSpan: 20|age: 8|description: Part of a collection we got from a cat lady
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
sku: 122|name: Anaconda|quantity: 1|baseprice: $299.95|price: SALE! $149.97|color: black|dateOfBirth: 08/03/2010|lifeSpan: 10|age: 8|description: Our anaconda don't want none unless you got buns, hun
sku: 123|name: Ball Python, Albino|quantity: 2|baseprice: $180.00|price: SALE! $90.00|color: white|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 130|name: Turtle|quantity: 4|baseprice: $29.95|price: $29.95|color: green|dateOfBirth: 12/05/2013|lifeSpan: 70|age: 5|description: Teenage and mutant
sku: 131|name: Tortoise|quantity: 1|baseprice: $2029.95|price: $2029.95|color: green|dateOfBirth: 01/01/1970|lifeSpan: 150|age: 49|description: Steve Erwin's pet
sku: 200|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: green|description: Dogs love balls.
sku: 201|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: blue|description: Dogs love balls.
sku: 202|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: red|description: Dogs love balls.
sku: 203|name: Cardboard Box|quantity: 100|baseprice: $29.95|price: $29.95|color: brown|description: Purfect for your cat
sku: 204|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: brown|description: Keep your cat from tearing up everything you own
sku: 205|name: Scratching Post|quantity: 9|baseprice: $69.95|price: $69.95|color: blue|description: Keep your cat from tearing up everything you own
sku: 206|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: red|description: Keep your cat from tearing up everything you own
sku: 210|name: Pet Carrier (small)|quantity: 5|baseprice: $30.00|price: $30.00|color: black|description: Keep your cat from tearing up your car
sku: 211|name: Pet Carrier (medium)|quantity: 5|baseprice: $40.00|price: $40.00|color: black|description: Keep your bigger cat from tearing up your car
sku: 212|name: Pet Carrier (large)|quantity: 5|baseprice: $50.00|price: $50.00|color: black|description: Keep your dog from puking in your car
sku: 213|name: Pet Carrier (x-large)|quantity: 5|baseprice: $60.00|price: $60.00|color: black|description: Keep your huge dog from puking in your car
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All pets, sorted by age ascending
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 101|name: Mutt|quantity: 1|baseprice: $19.99|price: $19.99|color: brown|dateOfBirth: 01/05/2018|lifeSpan: 10|age: 1|description: Some sort of dog.  We dont know what type
sku: 112|name: Persian Cat|quantity: 1|baseprice: $30.00|price: $30.00|color: white|dateOfBirth: 01/01/2017|lifeSpan: 18|age: 2|description: Imported from Persia|notes: Not really from persia
sku: 102|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: black|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 103|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: white|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 130|name: Turtle|quantity: 4|baseprice: $29.95|price: $29.95|color: green|dateOfBirth: 12/05/2013|lifeSpan: 70|age: 5|description: Teenage and mutant
sku: 104|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: black|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 105|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: brown|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 114|name: Minx Cat|quantity: 1|baseprice: $12.00|price: $12.00|color: white|dateOfBirth: 09/01/2010|lifeSpan: 20|age: 8|description: Part of a collection we got from a cat lady
sku: 122|name: Anaconda|quantity: 1|baseprice: $299.95|price: SALE! $149.97|color: black|dateOfBirth: 08/03/2010|lifeSpan: 10|age: 8|description: Our anaconda don't want none unless you got buns, hun
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 123|name: Ball Python, Albino|quantity: 2|baseprice: $180.00|price: SALE! $90.00|color: white|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 111|name: Russian Blue Cat|quantity: 2|baseprice: $14.99|price: SALE! $7.50|color: gray|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady|notes: We got 2 of these from the same old lady
sku: 110|name: Tom Cat|quantity: 1|baseprice: $14.99|price: SALE! $7.50|color: brown|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady
sku: 131|name: Tortoise|quantity: 1|baseprice: $2029.95|price: $2029.95|color: green|dateOfBirth: 01/01/1970|lifeSpan: 150|age: 49|description: Steve Erwin's pet
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All pets, sorted by lifespan descending
sku: 131|name: Tortoise|quantity: 1|baseprice: $2029.95|price: $2029.95|color: green|dateOfBirth: 01/01/1970|lifeSpan: 150|age: 49|description: Steve Erwin's pet
sku: 130|name: Turtle|quantity: 4|baseprice: $29.95|price: $29.95|color: green|dateOfBirth: 12/05/2013|lifeSpan: 70|age: 5|description: Teenage and mutant
sku: 123|name: Ball Python, Albino|quantity: 2|baseprice: $180.00|price: SALE! $90.00|color: white|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
sku: 110|name: Tom Cat|quantity: 1|baseprice: $14.99|price: SALE! $7.50|color: brown|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady
sku: 111|name: Russian Blue Cat|quantity: 2|baseprice: $14.99|price: SALE! $7.50|color: gray|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady|notes: We got 2 of these from the same old lady
sku: 114|name: Minx Cat|quantity: 1|baseprice: $12.00|price: $12.00|color: white|dateOfBirth: 09/01/2010|lifeSpan: 20|age: 8|description: Part of a collection we got from a cat lady
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 112|name: Persian Cat|quantity: 1|baseprice: $30.00|price: $30.00|color: white|dateOfBirth: 01/01/2017|lifeSpan: 18|age: 2|description: Imported from Persia|notes: Not really from persia
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 122|name: Anaconda|quantity: 1|baseprice: $299.95|price: SALE! $149.97|color: black|dateOfBirth: 08/03/2010|lifeSpan: 10|age: 8|description: Our anaconda don't want none unless you got buns, hun
sku: 101|name: Mutt|quantity: 1|baseprice: $19.99|price: $19.99|color: brown|dateOfBirth: 01/05/2018|lifeSpan: 10|age: 1|description: Some sort of dog.  We dont know what type
sku: 103|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: white|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 104|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: black|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 102|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: black|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 105|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: brown|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All cats, sorted by name
sku: 114|name: Minx Cat|quantity: 1|baseprice: $12.00|price: $12.00|color: white|dateOfBirth: 09/01/2010|lifeSpan: 20|age: 8|description: Part of a collection we got from a cat lady
sku: 112|name: Persian Cat|quantity: 1|baseprice: $30.00|price: $30.00|color: white|dateOfBirth: 01/01/2017|lifeSpan: 18|age: 2|description: Imported from Persia|notes: Not really from persia
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 111|name: Russian Blue Cat|quantity: 2|baseprice: $14.99|price: SALE! $7.50|color: gray|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady|notes: We got 2 of these from the same old lady
sku: 110|name: Tom Cat|quantity: 1|baseprice: $14.99|price: SALE! $7.50|color: brown|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All dogs, sorted by name
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 104|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: black|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 105|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: brown|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 101|name: Mutt|quantity: 1|baseprice: $19.99|price: $19.99|color: brown|dateOfBirth: 01/05/2018|lifeSpan: 10|age: 1|description: Some sort of dog.  We dont know what type
sku: 102|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: black|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 103|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: white|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All reptiles, sorted by color
sku: 122|name: Anaconda|quantity: 1|baseprice: $299.95|price: SALE! $149.97|color: black|dateOfBirth: 08/03/2010|lifeSpan: 10|age: 8|description: Our anaconda don't want none unless you got buns, hun
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
sku: 130|name: Turtle|quantity: 4|baseprice: $29.95|price: $29.95|color: green|dateOfBirth: 12/05/2013|lifeSpan: 70|age: 5|description: Teenage and mutant
sku: 131|name: Tortoise|quantity: 1|baseprice: $2029.95|price: $2029.95|color: green|dateOfBirth: 01/01/1970|lifeSpan: 150|age: 49|description: Steve Erwin's pet
sku: 123|name: Ball Python, Albino|quantity: 2|baseprice: $180.00|price: SALE! $90.00|color: white|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All mammals, sorted by age
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 101|name: Mutt|quantity: 1|baseprice: $19.99|price: $19.99|color: brown|dateOfBirth: 01/05/2018|lifeSpan: 10|age: 1|description: Some sort of dog.  We dont know what type
sku: 112|name: Persian Cat|quantity: 1|baseprice: $30.00|price: $30.00|color: white|dateOfBirth: 01/01/2017|lifeSpan: 18|age: 2|description: Imported from Persia|notes: Not really from persia
sku: 102|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: black|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 103|name: Pittbull|quantity: 1|baseprice: $99.95|price: SALE! $49.98|color: white|dateOfBirth: 07/05/2013|lifeSpan: 9|age: 5|description: Great with kids|notes: these are not really great with kids.
sku: 104|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: black|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 105|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: brown|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 114|name: Minx Cat|quantity: 1|baseprice: $12.00|price: $12.00|color: white|dateOfBirth: 09/01/2010|lifeSpan: 20|age: 8|description: Part of a collection we got from a cat lady
sku: 110|name: Tom Cat|quantity: 1|baseprice: $14.99|price: SALE! $7.50|color: brown|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady
sku: 111|name: Russian Blue Cat|quantity: 2|baseprice: $14.99|price: SALE! $7.50|color: gray|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady|notes: We got 2 of these from the same old lady
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All non-animal items, sorted by price descending
sku: 206|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: red|description: Keep your cat from tearing up everything you own
sku: 205|name: Scratching Post|quantity: 9|baseprice: $69.95|price: $69.95|color: blue|description: Keep your cat from tearing up everything you own
sku: 204|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: brown|description: Keep your cat from tearing up everything you own
sku: 213|name: Pet Carrier (x-large)|quantity: 5|baseprice: $60.00|price: $60.00|color: black|description: Keep your huge dog from puking in your car
sku: 212|name: Pet Carrier (large)|quantity: 5|baseprice: $50.00|price: $50.00|color: black|description: Keep your dog from puking in your car
sku: 211|name: Pet Carrier (medium)|quantity: 5|baseprice: $40.00|price: $40.00|color: black|description: Keep your bigger cat from tearing up your car
sku: 210|name: Pet Carrier (small)|quantity: 5|baseprice: $30.00|price: $30.00|color: black|description: Keep your cat from tearing up your car
sku: 203|name: Cardboard Box|quantity: 100|baseprice: $29.95|price: $29.95|color: brown|description: Purfect for your cat
sku: 202|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: red|description: Dogs love balls.
sku: 201|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: blue|description: Dogs love balls.
sku: 200|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: green|description: Dogs love balls.
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All brown or blue non-animal items, sorted by price descending
sku: 205|name: Scratching Post|quantity: 9|baseprice: $69.95|price: $69.95|color: blue|description: Keep your cat from tearing up everything you own
sku: 204|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: brown|description: Keep your cat from tearing up everything you own
sku: 203|name: Cardboard Box|quantity: 100|baseprice: $29.95|price: $29.95|color: brown|description: Purfect for your cat
sku: 201|name: Ball|quantity: 20|baseprice: $4.99|price: $4.99|color: blue|description: Dogs love balls.
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
Anything brown
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
sku: 204|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: brown|description: Keep your cat from tearing up everything you own
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 203|name: Cardboard Box|quantity: 100|baseprice: $29.95|price: $29.95|color: brown|description: Purfect for your cat
sku: 101|name: Mutt|quantity: 1|baseprice: $19.99|price: $19.99|color: brown|dateOfBirth: 01/05/2018|lifeSpan: 10|age: 1|description: Some sort of dog.  We dont know what type
sku: 105|name: Lab|quantity: 1|baseprice: $30.99|price: SALE! $15.49|color: brown|dateOfBirth: 04/17/2011|lifeSpan: 9|age: 7|description: Have been known to retrieve
sku: 110|name: Tom Cat|quantity: 1|baseprice: $14.99|price: SALE! $7.50|color: brown|dateOfBirth: 01/01/2000|lifeSpan: 20|age: 19|description: Part of a collection we got from a cat lady
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
Anything brown between $20 and $70 (inclusive), priced high to low
sku: 204|name: Scratching Post|quantity: 10|baseprice: $69.95|price: $69.95|color: brown|description: Keep your cat from tearing up everything you own
sku: 100|name: Hound|quantity: 1|baseprice: $40.50|price: $40.50|color: brown|dateOfBirth: 01/05/2019|lifeSpan: 14|age: 0|description: Aint nothin but a hound dog
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 113|name: Persian Cat|quantity: 2|baseprice: $30.00|price: $30.00|color: brown|dateOfBirth: 11/01/2013|lifeSpan: 18|age: 5|description: Imported from Persia|notes: Not really from persia
sku: 203|name: Cardboard Box|quantity: 100|baseprice: $29.95|price: $29.95|color: brown|description: Purfect for your cat
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
Anything priced >= $100, priced low to high
sku: 122|name: Anaconda|quantity: 1|baseprice: $299.95|price: SALE! $149.97|color: black|dateOfBirth: 08/03/2010|lifeSpan: 10|age: 8|description: Our anaconda don't want none unless you got buns, hun
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
sku: 131|name: Tortoise|quantity: 1|baseprice: $2029.95|price: $2029.95|color: green|dateOfBirth: 01/01/1970|lifeSpan: 150|age: 49|description: Steve Erwin's pet
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
All pets with lifespan >= 25yr, sorted by lifespan descending
sku: 131|name: Tortoise|quantity: 1|baseprice: $2029.95|price: $2029.95|color: green|dateOfBirth: 01/01/1970|lifeSpan: 150|age: 49|description: Steve Erwin's pet
sku: 130|name: Turtle|quantity: 4|baseprice: $29.95|price: $29.95|color: green|dateOfBirth: 12/05/2013|lifeSpan: 70|age: 5|description: Teenage and mutant
sku: 123|name: Ball Python, Albino|quantity: 2|baseprice: $180.00|price: SALE! $90.00|color: white|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 120|name: Ball Python|quantity: 3|baseprice: $80.00|price: SALE! $40.00|color: brown|dateOfBirth: 08/01/2001|lifeSpan: 30|age: 17|description: Python that can ball itself up
sku: 121|name: Rattlesnake|quantity: 1|baseprice: $180.00|price: $180.00|color: brown|dateOfBirth: 03/06/2007|lifeSpan: 25|age: 11|description: Great entertainment for babies
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
```
