do
print("\n\n\n\n\n\n\n\n\n\n\n\n\n=========== _G table: ===========")
table.foreach(_G, print)
print("\r\n===== package.loaded table: =====")
table.foreach(_G.package.loaded, print)
print("=================================")
end
