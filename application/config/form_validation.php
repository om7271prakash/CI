<?php
$config = [

            "add_article_rules" => [
                                            [
                                              "field" => "title",
                                              "label" => "Article Title",
                                              "rules" => "required",
                                            ],
                                            [
                                              "field" => "body",
                                              "label" => "Article Body",
                                              "rules" => "required",
                                            ]
                                  ],
            "admin_login"       => [
                                            [
                                              "field" => "username",
                                              "label" => "User Name",
                                              "rules" => "required|alpha|trim",
                                            ],
                                            [
                                              "field" => "password",
                                              "label" => "Password",
                                              "rules" => "required",
                                            ]
                                  ],
            "admin_register"       => [
                                            [
                                              "field" => "uname",
                                              "label" => "User Name",
                                              "rules" => "trim|required|min_length[5]",
                                            ],
                                            [
                                              "field" => "pword",
                                              "label" => "Password",
                                              "rules" => "required",
                                            ],
                                            [
                                              "field" => "pword1",
                                              "label" => "Confirm Password",
                                              "rules" => "required|matches[pword]",
                                            ],
                                            [
                                              "field" => "fname",
                                              "label" => "First Name",
                                              "rules" => "trim|required|alpha",
                                            ],
                                            [
                                              "field" => "lname",
                                              "label" => "Last Name",
                                              "rules" => "trim|alpha",
                                            ],
                                  ]
];

?>
