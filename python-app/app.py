import swagger_client

# Configure HTTP basicAuth
swagger_client.configuration.username = 'Gabi'
swagger_client.configuration.password = 'ILoveCats'

# create a client instance
client = swagger_client.KintoApi()

# Our bucket data (we can define it as a dict)
buck = {
    'data': {
        'id': 'openapi',
        'description': 'OpenAPI bucket'
    },
    'permissions': {
        'read': ['system.Everyone']
    }
}

# Create our bucket
client.create_bucket(bucket=buck)

# Our collection data (we can also use an object instance)
col = swagger_client.Collection()
col.data = {'description': 'What we know about our clients'}
col.permissions = {'write': ['system.Everyone']}

# Create or update our collection (we can also use positional args)
col = client.update_collection('openapi', 'clients', collection=col)

# Create a few records by batch
batch = swagger_client.Batch()

batch.defaults = {
    'method': 'POST',
    'path': '/buckets/openapi/collections/clients/records'
}

batch.requests = [
    {'body': {'data': {'id': 'python', 'tested': False}}},
    {'body': {'data': {'id': 'php', 'tested': True}}},
    {'body': {'data': {'id': 'haskell', 'tested': False}}}
]

# Get our created records. What if we also want the headers?
result = client.get_records_with_http_info('openapi', 'clients')
obj, status, headers = result
print(obj)

# But wait! There something there that sould be patched!
record = client.get_record('openapi', 'clients', 'python')
record.data['tested'] = True
result = client.patch_record('openapi', 'clients', 'python', record=record)

# Let's get only the changes
result = client.get_records('openapi', 'clients', since=headers['ETag'])
print(result)
