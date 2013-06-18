# Grimwire Core Protocols

- [discovery](discovery) The HATEOAS discovery protocol, provides a process for programmatically exporting and consuming hypermedia and other metadata. *It is not necessary to include this value in links.*
- [protocol](protocol) Resources which document hypermedia `rel` values.
- [semver](semver) A resource Semantic Versioning standard.
- [proxy](proxy) Resources which can be commanded to issue subsequent requests.
- [service](service) Resources which provide an entry-point to a domain of related resources.
- [interface](interface) Resources which describe a set of interactions and access policies to them.
- **[SSE](sse)**
 - [sse/relay](sse/relay) Resources which rebroadcast events to listeners.
- **[JS Hosting](js)**
 - [js/workerserver](js/workerserver) Resources which provide Worker Server javascripts.