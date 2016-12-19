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

from pprint import pformat
from six import iteritems
import re


class RecordPermissions(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, read=None, write=None):
        """
        RecordPermissions - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'read': 'list[str]',
            'write': 'list[str]'
        }

        self.attribute_map = {
            'read': 'read',
            'write': 'write'
        }

        self._read = read
        self._write = write


    @property
    def read(self):
        """
        Gets the read of this RecordPermissions.
        List of user principals that can read the record.

        :return: The read of this RecordPermissions.
        :rtype: list[str]
        """
        return self._read

    @read.setter
    def read(self, read):
        """
        Sets the read of this RecordPermissions.
        List of user principals that can read the record.

        :param read: The read of this RecordPermissions.
        :type: list[str]
        """

        self._read = read

    @property
    def write(self):
        """
        Gets the write of this RecordPermissions.
        List of user principals that can read, update and delete the record.

        :return: The write of this RecordPermissions.
        :rtype: list[str]
        """
        return self._write

    @write.setter
    def write(self, write):
        """
        Sets the write of this RecordPermissions.
        List of user principals that can read, update and delete the record.

        :param write: The write of this RecordPermissions.
        :type: list[str]
        """

        self._write = write

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
