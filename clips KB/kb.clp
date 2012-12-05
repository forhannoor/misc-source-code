(defrule MAIN::skin1
   (is-bird ?x)
   =>
   (assert(is-animal ?x))
   (assert(has-skin ?x)))

(defrule MAIN::skin2
   (is-fish ?x)
   =>
   (assert(is-animal ?x))
   (assert(has-skin ?x)))

(defrule MAIN::skin3
   (is-mammal ?x)
   =>
   (assert(is-animal ?x))
   (assert(has-skin ?x)))

(defrule MAIN::fish
   (is-fish ?x)
   (and (not (is-fish shark)))
   =>
   (assert (has-gills ?x))
   (assert (can-swim ?x))
   (assert (lay-eggs ?x)))

(defrule MAIN::bird
   (is-bird ?x)
   (and (not(is-bird ostrich)))
   =>
   (assert (has-wings ?x))
   (assert (can-fly ?x))
   (assert (lay-eggs ?x)))

(defrule MAIN::mammal
   (is-mammal ?x)
   =>
   (assert (do-not-lay-eggs ?x)))

(defrule MAIN::shark
   (is-fish shark)
   =>
   (assert (has-gills shark))
   (assert (can-swim shark))
   (assert (do-not-lay-eggs shark))
   (printout t "Sharks are dangerous" crlf)
   (assert (is-dangerous shark)))

(defrule MAIN::ostrich
   (is-bird ostrich)
   =>
   (assert (has-wings ostrich))
   (assert (is-tall ostrich))
   (assert (cannot-fly ostrich))
   (printout t "Ostriches cannot fly" crlf)
   (assert (can-walk ostrich)))

(defrule MAIN::salmon
   (is-fish salmon)
   =>
   (assert (has-gills salmon))
   (assert (can-swim salmon))
   (assert (is-delicious salmon))
   (printout t "We can eat salmon" crlf))

(defrule MAIN::canary
   (is-bird canary)
   =>
   (printout t "Canaries have skin" crlf)
   (assert(has-wings canary))
   (assert(can-fly canary))
   (printout t "Canaries can fly" crlf)
   (assert (color-canary yellow))
   (printout t "Color of Canaries is yellow" crlf))

(defrule MAIN::delicious
(is-delicious ?x)
=>
(assert(we-can-eat ?x))
)