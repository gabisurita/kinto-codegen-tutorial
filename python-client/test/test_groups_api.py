# coding: utf-8

"""
    kinto

    Kinto is a minimalist JSON storage service with synchronisation and sharing abilities. It is meant to be easy to use and easy to self-host.  **Limitations of this OpenAPI specification:**   1. Validation on OR clauses is not supported (e.g. provide `data` or `permissions`   in patch operations).   2. [Filtering](http://kinto.readthedocs.io/en/stable/api/1.x/filtering.html)   is supported on any field by using `?{prefix}{field_name}={value}`.   3. [Backoff headers](http://kinto.readthedocs.io/en/stable/api/1.x/backoff.html)   may occur with any response, but they are only present if the server is under   in heavy load, so we cannot validate them on every request. They are listed only   on the default error message.   4. [Collection schemas](http://kinto.readthedocs.io/en/stable/api/1.x/collections.html#collection-json-schema)   can be provided when defining a collection, but they are not validated by   this specification.

    OpenAPI spec version: 1.13
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

from __future__ import absolute_import

import os
import sys
import unittest

import swagger_client
from swagger_client.rest import ApiException
from swagger_client.apis.groups_api import GroupsApi


class TestGroupsApi(unittest.TestCase):
    """ GroupsApi unit test stubs """

    def setUp(self):
        self.api = swagger_client.apis.groups_api.GroupsApi()

    def tearDown(self):
        pass

    def test_create_group(self):
        """
        Test case for create_group

        
        """
        pass

    def test_delete_group(self):
        """
        Test case for delete_group

        
        """
        pass

    def test_delete_groups(self):
        """
        Test case for delete_groups

        
        """
        pass

    def test_get_group(self):
        """
        Test case for get_group

        
        """
        pass

    def test_get_groups(self):
        """
        Test case for get_groups

        
        """
        pass

    def test_patch_group(self):
        """
        Test case for patch_group

        
        """
        pass

    def test_update_group(self):
        """
        Test case for update_group

        
        """
        pass


if __name__ == '__main__':
    unittest.main()
