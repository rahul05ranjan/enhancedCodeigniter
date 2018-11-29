# enhancedCodeigniter
Currently only three methods available

#Method 1
Pass only table  
*get_table($table_name);*  
*get_table($table_name, $limit);*  
*get_table($table_name, $limit, $offset);*

```
e.g. print_r(get_table('users')); // users is table name

e.g. print_r(get_table('users', 5)); // users is table name

e.g. print_r(get_table('users' 5, 0)); // users is table name
```
`limit` and `offset` are optional in all methods

#Method 2

*get_table_where($table_name, [], $limit, $offset);*

```
print_r(get_table_where($table_name, ['id' => 4, 'email'	=>	'user@gmail.com', 'state_id !='	=>	0])); //pass as much as conditions
```
#Method 3

*is_table_exist($table_name);*

```
var_dump(is_table_exist('users'));
```
