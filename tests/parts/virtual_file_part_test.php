<?php
/**
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @version //autogentag//
 * @filesource
 * @package Mail
 * @subpackage Tests
 */


/**
 * @package Mail
 * @subpackage Tests
 */
class ezcMailVirtualFileTest extends ezcTestCase
{
    /**
     * Tests generating a complete ezcMailVirtualFile
     */
    public function testGenerateBase64()
    {
        $filePart = new ezcMailVirtualFile( "fly.jpg", file_get_contents( dirname( __FILE__) . "/data/fly.jpg" ) );
        $filePart->contentType = ezcMailFile::CONTENT_TYPE_IMAGE;
        $filePart->mimeType = "jpeg";
        // file_put_contents( dirname( __FILE__ ) . "/data/ezcMailFileTest_testGenerateBase64.data" );
        $this->assertEquals( file_get_contents( dirname( __FILE__ ) . "/data/ezcMailFilePartTest_testGenerateBase64.data" ),
                             $filePart->generate() );
    }

    public function testIsSet()
    {
        $filePart = new ezcMailVirtualFile( "fly.jpg", file_get_contents( dirname( __FILE__) . "/data/fly.jpg" ) );
        $this->assertEquals( true, isset( $filePart->contents ) );
        $this->assertEquals( false, isset( $filePart->no_such_property ) );
    } 

    public static function suite()
    {
         return new PHPUnit_Framework_TestSuite( "ezcMailVirtualFileTest" );
    }
}
?>
