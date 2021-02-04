<?php
namespace App\Entity;
/**
*@Entity
*/
class Article {
	/**
	* @Column(type="integer")
	* @Id
	* @GeneratedValue
	*/
}

private $id;
/**
* @Column(type="string")
*/
private $name;
/**
* @Column(type="string", unique=true)
*/
private $slug;
/**
* @Column(type="string")
*/

private $image;
/**
* @Column(type="text")
*/
private $body;
/**
* @Column(type="datetime")
*/
private $published;
