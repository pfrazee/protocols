# Grimwire Core Protocols

- [discovery](discovery) The HATEOAS discovery protocol, provides a process for programmatically exporting and consuming hypermedia and other metadata. *It is not necessary to include this value in links.*
- [semver](semver) A hypermedia Semantic Versioning standard.
- [proxy](proxy) Resources which can be commanded to issue subsequent requests.
- [service](service) Resources which provide an entry-point to a domain of related resources.
- [protocol](protocol) Resources which document hypermedia `rel` values.
- [interface](interface) Resources which describe a set of interactions and access policies to them.
- **[Signaling](signal)**
 - [signal/webrtc](signal/webrtc) Resources which communicate between potential WebRTC peers.
 - [signal/peers](signal/peers) Resources which communicate between peers in a session.
- **[JS Hosting](js)**
 - [js/workerserver](js/workerserver) Resources which provide Worker Servers when asked for application/json